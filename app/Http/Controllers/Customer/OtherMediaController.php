<?php

namespace App\Http\Controllers\Customer;

use App\Models\Media;
use App\Models\Other;
use App\Models\OtherMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OtherMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        Log::info('Fetching all other media');
        $othermedia = OtherMedia::all();
        return response()->json($othermedia);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('Media upload request', $request->all());

        if (!$request->hasFile('file')) {
            Log::error('No file uploaded');
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $file = $request->file('file');

        if (!$file->isValid()) {
            Log::error('Uploaded file is not valid');
            return response()->json(['error' => 'Invalid file'], 400);
        }


        $validator = Validator::make($request->all(), [
            'file' => 'required',
            // Uncomment this if you expect multiple files and want validation
            // 'file.*' => 'file|mimes:jpg,jpeg,png,gif,mp4,avi,svg,tmp|max:10240',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $uploadedMedia = [];

        if ($request->hasFile('file')) {
            $files = is_array($request->file('file')) ? $request->file('file') : [$request->file('file')];

            foreach ($files as $uploadedFile) {
                $filename = time() . '_' . $uploadedFile->getClientOriginalName();
                $filenameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
                $path = $uploadedFile->storeAs('othermedia', $filename);

                $othermedia = OtherMedia::create([
                    'file' => $path,
                    'type' => $uploadedFile->getMimeType(),
                    'size' => number_format($uploadedFile->getSize() / 1024, 2),
                    'extension' => $uploadedFile->getClientOriginalExtension(),
                    'alt' => $filenameWithoutExt,
                    'title' => $filenameWithoutExt,
                ]);

                $othermedia->url = asset('storage/' . $path); // adjust path if needed
                $uploadedMedia[] = $othermedia;
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
        $othermedia = OtherMedia::find($id);
        if (!$othermedia) {
            return response()->json(['message' => 'Media not found'], 404);
        }

        return response()->json($othermedia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Log::info($request->all());

        $validator = Validator::make($request->all(), [
            'file' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',

            'size' => 'required|string|max:255',
            'extension' => 'required|string|max:255',
            'alt' => 'required|string|max:255',
            'path' => 'required|string|max:255',

            // 'file.*' => 'file|mimes:jpg,jpeg,png,gif,mp4,avi,svg,tmp|max:10240',



        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $othermedia = OtherMedia::find($id);
        if (!$othermedia) {
            return response()->json(['message' => 'Media not found'], 404);
        }

        $othermedia->update($request->only(['file', 'title', 'type', 'size', 'extension', 'alt', 'path']));

        return response()->json(['message' => 'Media updated successfully'], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = OtherMedia::destroy($id);
        Log::info('Deleted media ID: ' . $id);

        return response()->json(['message' => 'Media deleted successfully'], 200);
    }
}