<?php
$title = NULL;
$keywords = null;
$description = null;
$page = '' ;
$request_uri = $_SERVER['REQUEST_URI'];
$segments = explode('/', $request_uri);
$last_page_name = end($segments);

if($last_page_name == 'index.php'){
$title = 'Homepage';
$keywords = 'home page keywords';
$description = 'home page description';
$page = 'Home' ;  
}

if($last_page_name == 'about-us.php'){
$title = 'About us';
$keywords = 'about page keywords';
$description = 'about page description';
$page = 'About Us' ;  
}

if($last_page_name == 'shop.php'){
$title = 'Our Shop';
$keywords = 'Shop page keywords';
$description = 'Shop page description';
$page = 'Our Shop' ;  
}

if($last_page_name == 'product-inner.php'){
$title = 'Product';
$keywords = 'Product Page keywords';
$description = 'Product Page description';
$page = 'Product Page' ;  
}

if($last_page_name == 'shop-collection.php'){
$title = 'Categories';
$keywords = 'Category Page keywords';
$description = 'Category Page description';
$page = 'Category Page' ;  
}

if($last_page_name == 'blog.php'){
$title = 'Latest Blogs';
$keywords = 'Blog page keywords';
$description = 'Blog page description';
$page = 'Latest Blogs' ;  
}

if($last_page_name == 'blog-detail.php'){
$title = 'Blog Detail Page';
$keywords = 'Blog inner page keywords';
$description = 'Blog inner page description';
$page = 'Inner Blog' ;  
}

if($last_page_name == 'contact.php'){
$title = 'Contact Us';
$keywords = 'Contact page keywords';
$description = 'Contact page description';
$page = 'Contact Us' ;  
}

if($last_page_name == 'checkout.php'){
$title = 'Checkout';
$keywords = 'Checkout page keywords';
$description = 'Checkout page description';
$page = 'Checkout' ;  
}

if($last_page_name == 'disclaimer.php'){
$title = 'Disclaimer';
$keywords = 'Disclaimer page keywords';
$description = 'Disclaimer page description';
$page = 'Disclaimer' ;  
}

if($last_page_name == 'FAQs.php'){
$title = 'FAQs';
$keywords = 'FAQs page keywords';
$description = 'FAQs page description';
$page = 'FAQs' ;  
}

if($last_page_name == 'login.php'){
$title = 'Login';
$keywords = 'Login page keywords';
$description = 'Login page description';
$page = 'Login' ;  
}

if($last_page_name == 'my-account.php'){
$title = 'My Account';
$keywords = 'My Account page keywords';
$description = 'My Account page description';
$page = 'My Account' ;  
}

if($last_page_name == 'order-tracking.php'){
$title = 'Order Tracking';
$keywords = 'Order Tracking page keywords';
$description = 'Order Tracking page description';
$page = 'Order Tracking' ;  
}

if($last_page_name == 'privacy-policy.php'){
$title = 'Privacy Policy';
$keywords = 'Privacy Policy page keywords';
$description = 'Privacy Policy page description';
$page = 'Privacy Policy' ;  
}

if($last_page_name == 'register.php'){
$title = 'Register Now';
$keywords = 'Register page keywords';
$description = 'Register page description';
$page = 'Register' ;  
}

if($last_page_name == 'returns-refund.php'){
$title = 'Returns & Refund';
$keywords = 'Returns & Refund page keywords';
$description = 'Returns & Refund page description';
$page = 'Returns & Refund' ;  
}

if($last_page_name == 'shipping-policy.php'){
$title = 'Shipping policy';
$keywords = 'Shipping page keywords';
$description = 'Shipping page description';
$page = 'Shipping' ;  
}

if($last_page_name == 'shopping-cart.php'){
$title = 'Shopping Cart';
$keywords = 'Cart page keywords';
$description = 'Cart page description';
$page = 'Cart' ;  
}

if($last_page_name == 'term-of-use.php'){
$title = 'Terms of Use';
$keywords = 'Terms of Use page keywords';
$description = 'Terms of Use page description';
$page = 'Terms of Use' ;  
}

if($last_page_name == 'wish-list.php'){
$title = 'Wishlist';
$keywords = 'Wishlist page keywords';
$description = 'Wishlist page description';
$page = 'Wishlist' ;  
}

if($last_page_name == 'forget-password.php'){
$title = 'Forget Password';
$keywords = 'Forget Password page keywords';
$description = 'Forget Password page description';
$page = 'Forget Password' ;  
}
?>    
    
    
    <meta http-equiv="content-type" content="text/html charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$title?></title>
    <meta name="title" content="<?=$title?>" >
    <meta name="keywords" content="<?=$keywords?>" >
    <meta name="description" content="<?=$description?>" >