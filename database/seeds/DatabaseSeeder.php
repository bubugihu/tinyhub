<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(FeedbackSeeder::class);
        // $this->call(BannerSeeder::class);
        // $this->call(BrandSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(CustomerSeeder::class);
        // $this->call(CommentsSeeder::class);
        // $this->call(GallerySeeder::class);
        // $this->call(OrderSeeder::class);
        // $this->call(OrderDetailsSeeder::class);
        

        DB::table('users')->insert([
            ['name' => 'Na', 'email' => 'na@gmail.com', 'password' => 'na123'],
            ['name' => 'QuangMap', 'email' => 'quang@gmail.com', 'password' => 'quang123'],
            ['name' => 'Bu', 'email' => 'bu@gmail.com', 'password' => 'bu123'],
            ['name' => 'Thanh', 'email' => 'thanh@gmail.com', 'password' => 'thanh123'],
            ['name' => 'Kien', 'email' => 'kien@gmail.com', 'password' => 'kien123']
        ]);
        DB::table('feedback')->insert([
            ['feed_title' => 'Test Product 1', 'feed_content' => 'Thanh Test Product', 'feed_phone' => '0359875621', 'feed_email' => 'thanh@gmail.com'],
            ['feed_title' => 'Test Product 2', 'feed_content' => 'Kien Test Product', 'feed_phone' => '03598456621', 'feed_email' => 'thanh@gmail.com'],
            ['feed_title' => 'Test Product 3', 'feed_content' => 'Quang Coi Test Product', 'feed_phone' => '0378875621', 'feed_email' => 'thanh@gmail.com']

        ]);
        DB::table('banner')->insert([
            ['ban_title' => 'Dang Xuan Quang awesome product', 'ban_content' => 'Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerumnecessitatibus praesentium voluptatum deleniti atque corrupti.', 'ban_image' => 'headphone-slider2.png'],
            ['ban_title' => 'Nguyen Duc Anh awesome product', 'ban_content' => 'Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerumnecessitatibus praesentium voluptatum deleniti atque corrupti.', 'ban_image' => 'headphone-slider1.png'],
            ['ban_title' => 'Bui Gia Hung awesome product', 'ban_content' => 'Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerumnecessitatibus praesentium voluptatum deleniti atque corrupti.', 'ban_image' => 'headphone-slider2.png'],
        ]);
        DB::table('brand')->insert([
            ['brand_name' => 'Sony', 'brand_image' => 'img/feature/sony.svg', 'description' => "Sony Corporation (ソニー株式会社, Sonī Kabushiki Kaisha, /ˈsoʊni/ SOH-nee, commonly known as Sony and stylized as SONY) is a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo. Its diversified business includes consumer and professional electronics, semiconductors, gaming, entertainment and financial services. The company owns the largest music entertainment business in the world, the largest video game console business and one of the largest video game publishing businesses, and is one of the leading manufacturers of electronic products for the consumer and professional markets, and a leading player in the film and television entertainment industry. Sony was ranked 97th on the 2018 Fortune Global 500 list. Sony Corporation is the electronics business unit and the parent company of the Sony Group (ソニー・グループ, Sonī Gurūpu), which is engaged in business through its four operating components: electronics (AV, IT & communication products, semiconductors, video games, network services and medical business), motion pictures (movies and TV shows), music (record labels and music publishing) and financial services (banking and insurance).These make Sony one of the most comprehensive entertainment companies in the world. The group consists of Sony Corporation, Sony Electronics, Sony Semiconductor Solutions, Sony Pictures, Sony Interactive Entertainment, Sony Music, Sony Financial Holdings, and others. Sony is among the semiconductor sales leaders and as of 2015, the fifth-largest television manufacturer in the world after Samsung Electronics, LG Electronics, TCL and Hisense, although it is the world's largest player in the premium TV market, a market for a television of at least 55-inch in size, with a price higher than $2,500. The company's current slogan is Be Moved. Their former slogans were The One and Only (1979–1982), It's a Sony (1982–2005), like.no.other (2005–2009) and make.believe (2009–2013)."],
            ['brand_name' => 'JBL', 'brand_image' => 'img/feature/jbl.svg', 'description' => "JBL is an American company that manufactures audio equipment, including loudspeakers and headphones. There are two independent divisions within the company; JBL Consumer produces audio equipment for the consumer home market, while the JBL Professional produces professional equipment for the studio, installed sound, tour sound, portable sound (production and DJ), and cinema markets. JBL is owned by Harman International Industries, a subsidiary of South Korean company Samsung Electronics. JBL was founded by James Bullough Lansing (1902–1949) who was an American audio engineer and loudspeaker designer most notable for establishing two audio companies that bear his name, Altec Lansing and JBL, the latter taken from his initials."],
            ['brand_name' => 'Westone', 'brand_image' => 'img/feature/westone.png', 'description' => "Westone is a brand of musical instruments that have been used by manufacturing companies of electric and acoustic guitars and basses. The name 'Westone' gained notoriety when used by Matsumoku in Japan and St. Louis Music in Korea until the brand was ceased in 1991. Since then, the Westone name has appeared in some instruments by luthiers or manufacturing companies of Europe and Asia."],
            ['brand_name' => 'Beats', 'brand_image' => 'img/feature/beats.svg', 'description' => "Beats Electronics LLC (also known as Beats by Dr. Dre, or simply Beats by Dre) is a subsidiary of Apple Inc. that produces audio products. Headquartered in Culver City, California,the company was founded by music producer and rapper Dr. Dre and Interscope Records co-founder Jimmy Iovine. The subsidiary's product line is primarily focused on headphones and speakers. The company's original product line was manufactured in partnership with the AV equipment company Monster Cable Products. Following the end of its contract with the company, Beats took further development of its products in-house. In 2014, the company expanded into the online music market with the launch of a subscription-based streaming service, Beats Music. In 2011, NPD Group reported that Beats' market share was 64% in the U.S. for headphones priced higher than $100, and the brand was valued at $1 billion in September 2013. For a period, the company was majority-owned by Taiwanese smartphone maker HTC. The company reduced its stake to 25% in 2012, and sold its remaining stake back to the company in 2013. Concurrently, Carlyle Group replaced HTC as a minority shareholder, alongside Dr. Dre and Iovine in late 2013. On August 1, 2014, Apple acquired Beats for $3 billion in a cash and stock deal, the largest acquisition in Apple's history."],
            ['brand_name' => 'Bang & Olufsen', 'brand_image' => 'img/feature/bang-olufsen.png', 'description' => "Bang & Olufsen (B&O) (stylized as BANG & OLUFSEN) is a high end luxury Danish consumer electronics company that designs and manufactures audio products, television sets, and telephones. It was founded in 1925 by Peter Bang and Svend Olufsen, who designed a radio to work with alternating current, a product of significance at a time when most radios were still running on batteries. In May 2015, HARMAN International Industries (which later became a subsidiary of Samsung), announced the completion of its acquisition of Bang & Olufsen Automotive car audio business. In March 2017, Tymphany, an audio ODM based in Hong Kong and with manufacturing operations in Dongchen, announced the acquisition of the engineering and manufacturing operation in the Czech Republic from Bang & Olufsen."],
        ]);
        DB::table('category')->insert([
            ['category_name' => 'In Ear'],
            ['category_name' => 'On Ear'],
            ['category_name' => 'True Wireless'],
        ]);
        DB::table('product')->insert([
            [
                'product_title' => 'JBL LIVE 300TWS',
                'price' => 2000,
                'feature_image' => 'in-ear-jbl-1-1.jpg',
                'warranty_period' => '2025_12_01',
                'category_id' => 1,
                'brand_id' => 2
            ],

            [
                'product_title' => 'JBL Reflect Flow',
                'price' => 2300,
                'feature_image' => 'in-ear-jbl-2-1.jpg',
                'warranty_period' => '2025_12_01',
                'category_id' => 1,
                'brand_id' => 2
            ],

            [
                'product_title' => 'Sony XBA-N1AP',
                'price' => 3200,
                'feature_image' => 'in-ear-sony-1-1.jpg',
                'warranty_period' => '2025_12_01',
                'category_id' => 1,
                'brand_id' => 1
            ],

            [
                'product_title' => 'Sony WI-XB400',
                'price' => 1000,
                'feature_image' => 'in-ear-sony-2-1.jpg',
                'warranty_period' => '2025_12_01',
                'category_id' => 1,
                'brand_id' => 1
            ],

            [
                'product_title' => 'Westone W40',
                'price' => 3200,
                'feature_image' => 'in-ear-westone-1-1.jpeg',
                'warranty_period' => '2025_12_01',
                'category_id' => 1,
                'brand_id' => 3
            ],

            [
                'product_title' => 'Westone W60',
                'price' => 1000,
                'feature_image' => 'in-ear-westone-2-1.jpg',
                'warranty_period' => '2025_12_01',
                'category_id' => 1,
                'brand_id' => 3
            ],
        ]);
        DB::table('customer')->insert([
            ['customer_name' => 'Nguyen Duc Anh', 'dob' => '1999-05-10', 'gender' => 'Male', 'phone' => '0359874521', 'address' => '580 cach mang thang tam - Q3 - TPHCM', 'users_id' => '1'],
            ['customer_name' => 'Dang Xuan Quang', 'dob' => '1980-05-10', 'gender' => 'Male', 'phone' => '0359784521', 'address' => '590 cach mang thang tam - Q3 - TPHCM', 'users_id' => '2'],
            ['customer_name' => 'Bui Gia Hung', 'dob' => '1980-05-10', 'gender' => 'Male', 'phone' => '0359454521', 'address' => '600 cach mang thang tam - Q3 - TPHCM', 'users_id' => '3'],
            ['customer_name' => 'Nguyen Chi Thanh', 'dob' => '2001-04-10', 'gender' => 'Male', 'phone' => '0352384521', 'address' => '590 cach mang thang tam - Q3 - TPHCM', 'users_id' => '2'],
            ['customer_name' => 'Vu Manh Kien', 'dob' => '2001-02-10', 'gender' => 'Male', 'phone' => '0359434521', 'address' => '600 cach mang thang tam - Q3 - TPHCM', 'users_id' => '3']
        ]);
        DB::table('comments')->insert([
            ['cmt_title' => 'Test Comments 1', 'cmt_content' => 'Na Test', 'product_id' => 1, 'customer_id' => 1],
            ['cmt_title' => 'Test Comments 2', 'cmt_content' => 'Bu Test', 'product_id' => 3, 'customer_id' => 3],
            ['cmt_title' => 'Test Comments 3', 'cmt_content' => 'Thanh Test', 'product_id' => 2, 'customer_id' => 4],
            ['cmt_title' => 'Test Comments 4', 'cmt_content' => 'Quang Map Test', 'product_id' => 5, 'customer_id' => 2]
        ]);
        DB::table('gallery')->insert([
            ['product_gallery' => 'in-ear-jbl-1-2.jpg', 'product_id' => 1],
            ['product_gallery' => 'in-ear-jbl-1-3.jpg', 'product_id' => 1],
            ['product_gallery' => 'in-ear-jbl-1-4.jpg', 'product_id' => 1],
            ['product_gallery' => 'in-ear-jbl-2-2.jpg', 'product_id' => 2],
            ['product_gallery' => 'in-ear-jbl-2-3.jpg', 'product_id' => 2],
            ['product_gallery' => 'in-ear-jbl-2-4.jpg', 'product_id' => 2],
            ['product_gallery' => 'in-ear-sony-1-2.jpg', 'product_id' => 3],
            ['product_gallery' => 'in-ear-sony-1-3.jpg', 'product_id' => 3],
            ['product_gallery' => 'in-ear-sony-1-4.jpg', 'product_id' => 3],
            ['product_gallery' => 'in-ear-sony-2-2.jpg', 'product_id' => 4],
            ['product_gallery' => 'in-ear-sony-2-3.jpg', 'product_id' => 4],
            ['product_gallery' => 'in-ear-sony-2-4.jpg', 'product_id' => 4],
        ]);
        DB::table('order')->insert([
            ['shipping_address'=>'234 Le Hong Phong','consignee_name'=>'Nguyen Duc Anh','phone_consignee'=>'0359875621','status'=>1,'customer_id'=>1],
            ['shipping_address'=>'234 3 thang 2','consignee_name'=>'Dang Xuan Quang','phone_consignee'=>'0359871221','status'=>0,'customer_id'=>2],
            ['shipping_address'=>'234 Phan Van Tri','consignee_name'=>'Bui Gia Hung','phone_consignee'=>'0359875665','status'=>0,'customer_id'=>3],
            ['shipping_address'=>'234 Nguyen Chi Thanh','consignee_name'=>'Nguyen Chi Thanh','phone_consignee'=>'0459875621','status'=>1,'customer_id'=>4],
            
        ]);
        DB::table('order_details')->insert([
            ['quantity'=>12,'order_id'=>1,'product_id'=>1],
            ['quantity'=>22,'order_id'=>2,'product_id'=>4],
            ['quantity'=>1,'order_id'=>3,'product_id'=>6],
            ['quantity'=>12,'order_id'=>4,'product_id'=>2],
        ]);
    }
}
