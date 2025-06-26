<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $media = Media::all();
        return response()->json($media);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('Media upload request', $request->all());

        $validator = Validator::make($request->all(), [
            'file' => 'required',
            // 'file.*' => 'file|mimes:jpg,jpeg,png,gif,mp4,avi,svg,tmp|max:10240',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $uploadedMedia = [];

        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $uploadedFile) {
                $filename = time() . '_' . $uploadedFile->getClientOriginalName();
                $filenameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
                $path = $uploadedFile->storeAs('media', $filename);

                $media = Media::create([
                    'file' => $path,
                    'type' => $uploadedFile->getMimeType(),
                    'size' => number_format($uploadedFile->getSize() / 1024, 2),
                    'extension' => $uploadedFile->getClientOriginalExtension(),
                    'alt' => $filenameWithoutExt,
                    'title' => $filenameWithoutExt,
                ]);
                $media->url = asset('uploads/');

                $uploadedMedia[] = $media;
            }



            return response()->json([
                'message' => 'Media uploaded successfully',
                'data' => $uploadedMedia,

            ], 201);
        } else {
            return response()->json(['error' => 'No file uploaded.'], 400);

        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $media = Media::find($id);
        if (!$media) {
            return response()->json(['message' => 'Media not found'], 404);
        }
        // Return the variant as a JSON response    
        return response()->json($media);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info($request->all());
        $validator = Validator::make($request->all(), [
            'file' => 'required|string|max:255',
            // 'title' => 'required|string|max:255',
            // 'type' => 'required|string|max:255',
            // 'size' => 'required|string|max:255',
            // 'extension' => 'required|string|max:255',
            // 'alt' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
        // Find the variant by ID
        $media = Media::find($id);
        if (!$media) {
            return response()->json(['message' => 'Media not found'], 404);
        }
        // Update the variant with the request data

        $media->file = $request->file;
        $media->title = $request->title;
        $media->type = $request->type;
        $media->size = $request->size;
        $media->extension = $request->extension;
        $media->alt = $request->alt;

        $media->save();
        return response()->json(['message' => 'Media updated successfully'], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $media = Media::destroy($id);
        Log::info($media);
        return response()->json(['message' => 'Media deleted successfully'], 200);
    }
}
