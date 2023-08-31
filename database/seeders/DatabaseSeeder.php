<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $clothingCategories = array(
            array(
                "title" => "Men's T-Shirts",
                "summary" => "Explore a wide range of stylish men's t-shirts.",
                "content" => "Discover our collection of men's t-shirts, featuring various designs, colors, and sizes to suit your style."
            ),
            array(
                "title" => "Women's Dresses",
                "summary" => "Find the perfect dress for any occasion.",
                "content" => "From casual to formal, our women's dresses collection offers a variety of options to help you look your best."
            ),
            array(
                "title" => "Kids' Clothing",
                "summary" => "Adorable and comfortable clothing for kids.",
                "content" => "Dress your little ones in comfortable and cute clothing that they'll love to wear."
            ),
            array(
                "title" => "Suits and Blazers",
                "summary" => "Elevate your style with our collection of suits and blazers.",
                "content" => "Whether it's for a formal event or a professional look, our suits and blazers are designed to make you stand out."
            ),
            array(
                "title" => "Activewear",
                "summary" => "Stay active in style with our high-quality activewear.",
                "content" => "From workout leggings to performance tops, our activewear ensures both comfort and style during your fitness routines."
            ),
            array(
                "title" => "Outerwear",
                "summary" => "Stay warm and fashionable with our outerwear collection.",
                "content" => "Explore a variety of coats and jackets to keep you cozy while maintaining your trendy appearance."
            ),
            array(
                "title" => "Jeans and Denim",
                "summary" => "Discover the perfect pair of jeans that fit your style.",
                "content" => "Our denim collection includes a wide range of jeans, from classic to trendy cuts, designed to flatter every body type."
            ),
            array(
                "title" => "Formal Wear",
                "summary" => "Get ready for special occasions with our formal wear.",
                "content" => "Find elegant dresses and sharp suits that will make you look and feel your best at weddings, parties, and more."
            ),
            array(
                "title" => "Loungewear",
                "summary" => "Relax in comfort with our cozy loungewear pieces.",
                "content" => "From soft pajamas to comfortable lounge sets, our loungewear is perfect for unwinding at home."
            ),
            array(
                "title" => "Shoes",
                "summary" => "Step up your footwear game with our trendy shoes.",
                "content" => "Browse through our collection of shoes, including sneakers, heels, and boots, to find the perfect pair for any outfit."
            ),
            array(
                "title" => "Bags and Purses",
                "summary" => "Complete your look with our stylish bags and purses.",
                "content" => "Accessorize with our range of bags and purses that combine fashion and functionality in one."
            ),
            array(
                "title" => "Swimwear",
                "summary" => "Make a splash with our collection of swimwear.",
                "content" => "Find the ideal swimsuit for your beach or pool day from our diverse range of swimwear styles and patterns."
            ),
            array(
                "title" => "Hats and Caps",
                "summary" => "Top off your outfit with our fashionable hats and caps.",
                "content" => "Choose from a variety of hats and caps that add flair to your look while providing sun protection."
            ),
            array(
                "title" => "Undergarments",
                "summary" => "Discover comfortable and supportive undergarments.",
                "content" => "From bras to underwear, our collection of undergarments is designed to keep you comfortable all day."
            ),
            array(
                "title" => "Workout Gear",
                "summary" => "Enhance your workout experience with our specialized workout gear.",
                "content" => "Explore fitness-friendly clothing and accessories that help you achieve your exercise goals."
            ),
            array(
                "title" => "Maternity Clothing",
                "summary" => "Stay stylish and comfortable throughout your pregnancy.",
                "content" => "Our maternity clothing collection offers trendy and practical options for expecting mothers."
            ),
            array(
                "title" => "Ethnic and Cultural Wear",
                "summary" => "Celebrate diversity with our ethnic and cultural clothing.",
                "content" => "Experience a variety of traditional and contemporary clothing that honors different cultures."
            ),
            array(
                "title" => "Vintage Collection",
                "summary" => "Step back in time with our curated vintage clothing.",
                "content" => "Discover unique pieces from bygone eras that bring a touch of nostalgia to your wardrobe."
            ),
            array(
                "title" => "Plus Size Clothing",
                "summary" => "Find stylish options that celebrate every body.",
                "content" => "Our plus-size clothing range offers fashionable choices for all occasions, ensuring confidence and comfort."
            ),
            array(
                "title" => "Formal Accessories",
                "summary" => "Complete your formal look with our accessories.",
                "content" => "From ties and bowties to cufflinks, our formal accessories add sophistication to your ensemble."
            ),
        );

        // loop through the $clothingCategories array and create product categories
        foreach ($clothingCategories as $clothingCategory) {
            \App\Models\Category::create([
                'title' => $clothingCategory['title'],
                'slug' => \Illuminate\Support\Str::slug($clothingCategory['title']),
                'summary' => $clothingCategory['summary'],
                'content' => $clothingCategory['content'],
                'sort_order' => 0,
                'status' => 1,
            ]);
        }


        $clothingProducts = array(
            array(
                "title" => "Men's Classic White T-Shirt",
                "summary" => "A timeless white t-shirt for everyday wear.",
                "description" => "Upgrade your wardrobe with this versatile men's white t-shirt. Made from high-quality cotton, it offers a comfortable fit and pairs well with jeans, shorts, and more."
            ),
            array(
                "title" => "Women's Floral Wrap Dress",
                "summary" => "A charming floral wrap dress for any occasion.",
                "description" => "Embrace elegance with this women's floral wrap dress. The flattering silhouette and delicate floral pattern make it perfect for both casual outings and special events."
            ),
            array(
                "title" => "Kids' Colorful Hoodie",
                "summary" => "A vibrant hoodie that kids will love.",
                "description" => "Keep your little ones cozy and stylish with this colorful hoodie. The soft fabric and eye-catching design make it a favorite among kids of all ages."
            ),
            array(
                "title" => "Slim-Fit Charcoal Suit",
                "summary" => "A modern charcoal suit for a sharp look.",
                "description" => "Dress to impress with this slim-fit charcoal suit. Whether it's a business meeting or a formal event, this suit is tailored to perfection for a sleek appearance."
            ),
            array(
                "title" => "Performance Workout Leggings",
                "summary" => "Stay comfortable during workouts with these leggings.",
                "description" => "Achieve your fitness goals in style with these performance workout leggings. The moisture-wicking fabric and flexible fit ensure maximum comfort and mobility."
            ),
            array(
                "title" => "Leather Biker Jacket",
                "summary" => "Add a touch of edge with this leather biker jacket.",
                "description" => "Make a bold statement with this classic leather biker jacket. The rugged design and premium materials create a timeless look that exudes confidence."
            ),
            array(
                "title" => "Classic Blue Jeans",
                "summary" => "Every wardrobe needs a pair of classic blue jeans.",
                "description" => "Elevate your denim game with these classic blue jeans. The straight-leg fit and durable denim ensure both style and comfort for everyday wear."
            ),
            array(
                "title" => "Elegant Evening Gown",
                "summary" => "An elegant evening gown for a glamorous night.",
                "description" => "Turn heads at any formal event with this elegant evening gown. The intricate details and flowing silhouette create a stunning look that's sure to impress."
            ),
            array(
                "title" => "Cozy Lounge Set",
                "summary" => "Relax in style with this cozy lounge set.",
                "description" => "Unwind in comfort with this cozy lounge set. The soft fabric and relaxed fit make it the perfect choice for lounging around the house or running errands."
            ),
            array(
                "title" => "Sleek High-Top Sneakers",
                "summary" => "Step up your footwear game with these high-top sneakers.",
                "description" => "Make a fashion statement with these sleek high-top sneakers. The modern design and cushioned sole provide both style and comfort for everyday wear."
            ),
            array(
                "title" => "Chic Crossbody Bag",
                "summary" => "Complete your look with this chic crossbody bag.",
                "description" => "Carry your essentials in style with this chic crossbody bag. The compact size and trendy design make it a versatile accessory for various outfits."
            ),
            array(
                "title" => "Stylish One-Piece Swimsuit",
                "summary" => "Hit the beach in style with this one-piece swimsuit.",
                "description" => "Make a splash with this stylish one-piece swimsuit. The flattering cut and vibrant pattern ensure you stand out on the beach or by the pool."
            ),
            array(
                "title" => "Classic Fedora Hat",
                "summary" => "Top off your outfit with this classic fedora hat.",
                "description" => "Add a touch of sophistication to your look with this classic fedora hat. The timeless design and quality materials make it a must-have accessory."
            ),
            array(
                "title" => "Comfortable Underwear Set",
                "summary" => "Start your day right with this comfortable underwear set.",
                "description" => "Stay comfortable all day long with this high-quality underwear set. The soft fabric and excellent fit provide a foundation for confidence and comfort."
            ),
            array(
                "title" => "Breathable Workout Tank",
                "summary" => "Stay cool during workouts with this breathable tank.",
                "description" => "Enhance your workout experience with this breathable workout tank. The moisture-wicking fabric and ergonomic design keep you comfortable as you push your limits."
            ),
            array(
                "title" => "Maternity Maxi Dress",
                "summary" => "Stay stylish and comfortable throughout pregnancy.",
                "description" => "Experience comfort and style with this maternity maxi dress. The stretchy fabric and flowing design adapt to your changing body, making it a go-to choice during pregnancy."
            ),
            array(
                "title" => "Traditional Embroidered Kurta",
                "summary" => "Celebrate culture with this embroidered kurta.",
                "description" => "Express your cultural heritage with this traditional embroidered kurta. The intricate details and vibrant colors showcase your appreciation for tradition."
            ),
            array(
                "title" => "Vintage-Inspired Denim Jacket",
                "summary" => "Add a vintage touch with this denim jacket.",
                "description" => "Embrace retro vibes with this vintage-inspired denim jacket. The distressed details and classic design create a look that's both timeless and trendy."
            ),
            array(
                "title" => "Flattering Plus-Size Dress",
                "summary" => "Confidence and style combined in this plus-size dress.",
                "description" => "Feel confident and beautiful in this flattering plus-size dress. The tailored fit and elegant design make it a perfect choice for various occasions."
            ),
            array(
                "title" => "Formal Bowtie and Cufflink Set",
                "summary" => "Complete your formal look with this accessory set.",
                "description" => "Add a touch of sophistication to your formal attire with this bowtie and cufflink set. The classic design and high-quality materials elevate your ensemble."
            ),
        );

        // create products using the $clothingProducts array and add a random category to each product
        foreach ($clothingProducts as $clothingProduct) {
            $product = \App\Models\Product::create([
                'title' => $clothingProduct['title'],
                'slug' => \Illuminate\Support\Str::slug($clothingProduct['title']),
                'summary' => $clothingProduct['summary'],
                'description' => $clothingProduct['description'],
                'price' => rand(1000, 10000),
                'stock' => rand(0, 100),
                'sort_order' => 0,
                'status' => 1,
            ]);

            $product->categories()->attach(rand(1, 20));
        }

    }
}
