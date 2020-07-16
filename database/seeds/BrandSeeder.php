<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([
            ['brand_name'=>'Sony','brand_image'=>'sony-logo.png','description'=>"Sony Corporation Sony Kabushiki Kaisha, SOH-nee, commonly known as Sony and stylized as SONY) is a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo. Its diversified business includes consumer and professional electronics, semiconductors, gaming, entertainment, and financial services. The company owns the largest music entertainment business in the world, the largest video game console business and one of the largest video game publishing businesses, and is one of the leading manufacturers of electronic products for the consumer and professional markets, and a leading player in the film and television entertainment industry. Sony was ranked 97th on the 2018 Fortune Global 500 list."],
            ['brand_name'=>'JBL','brand_image'=>'jbl-logo.png','description'=>"JBL is an American company that manufactures audio equipment, including loudspeakers and headphones. There are two independent divisions within the company; JBL Consumer produces audio equipment for the consumer home market, while the JBL Professional produces professional equipment for the studio, installed sound, tour sound, portable sound (production and DJ), and cinema markets. JBL is owned by Harman International Industries, a subsidiary of South Korean company Samsung Electronics. JBL was founded by James Bullough Lansing (1902–1949) who was an American audio engineer and loudspeaker designer most notable for establishing two audio companies that bear his name, Altec Lansing and JBL, the latter taken from his initials."],
            ['brand_name'=>'Westone','brand_image'=>'westone.png','description'=>"Westone is a brand of musical instruments that have been used by manufacturing companies of electric and acoustic guitars and basses. The name 'Westone' gained notoriety when used by Matsumoku in Japan and St. Louis Music in Korea until the brand was ceased in 1991. Since then, the Westone name has appeared in some instruments by luthiers or manufacturing companies of Europe and Asia."],
            ['brand_name'=>'Beats','brand_image'=>'beats-logo.png','description'=>"Beats Electronics LLC (also known as Beats by Dr. Dre, or simply Beats by Dre) is a subsidiary of Apple Inc. that produces audio products. Headquartered in Culver City, California, the company was founded by music producer and rapper Dr. Dre and Interscope Records co-founder Jimmy Iovine. The subsidiary's product line is primarily focused on headphones and speakers. The company's original product line was manufactured in partnership with the AV equipment company Monster Cable Products. Following the end of its contract with the company, Beats took further development of its products in-house. In 2014, the company expanded into the online music market with the launch of a subscription-based streaming service, Beats Music."],
            ['brand_name'=>'Bang & Olufsen','brand_image'=>'bando-logo.png','description'=>"Bang & Olufsen (B&O) (stylized as BANG & OLUFSEN) is a high end luxury Danish consumer electronics company that designs and manufactures audio products, television sets, and telephones. It was founded in 1925 by Peter Bang and Svend Olufsen, who designed a radio to work with alternating current, a product of significance at a time when most radios were still running on batteries. In May 2015, HARMAN International Industries (which later became a subsidiary of Samsung), announced the completion of its acquisition of Bang & Olufsen Automotive car audio business. In March 2017, Tymphany, an audio ODM based in Hong Kong and with manufacturing operations in Dongchen, announced the acquisition of the engineering and manufacturing operation in the Czech Republic from Bang & Olufsen."],
        ]);
    }
}