<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            //--------------------------------------------------------------------In Ear - JBL
            ['product_title'=>'JBL In Ear 1',
            'price'=>110,
            'feature_image'=>'JBL-In-Ear-JIE1-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL In Ear 2',
            'price'=>105,
            'feature_image'=>'JBL-In-Ear-JIE2-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL In Ear 3',
            'price'=>115,
            'feature_image'=>'JBL-In-Ear-JIE3-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL In Ear 4',
            'price'=>100,
            'feature_image'=>'JBL-In-Ear-JIE4-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL In Ear 5',
            'price'=>109,
            'feature_image'=>'JBL-In-Ear-JIE5-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL In Ear 6',
            'price'=>118,
            'feature_image'=>'JBL-In-Ear-JIE6-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL In Ear 7',
            'price'=>125,
            'feature_image'=>'JBL-In-Ear-JIE7-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL In Ear 8',
            'price'=>130,
            'feature_image'=>'JBL-In-Ear-JIE8-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL In Ear 9',
            'price'=>135,
            'feature_image'=>'JBL-In-Ear-JIE9-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

            ['product_title'=>'JBL In Ear 10',
            'price'=>129,
            'feature_image'=>'JBL-In-Ear-JIE10-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>2],

           

            //--------------------------------------------------------------------In Ear - Sony
            ['product_title'=>'Sony In Ear 1',
            'price'=>200,
            'feature_image'=>'Sony-In-Ear-SIE1-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],
            
            ['product_title'=>'Sony In Ear 2',
            'price'=>210,
            'feature_image'=>'Sony-In-Ear-SIE2-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],

            ['product_title'=>'Sony In Ear 3',
            'price'=>205,
            'feature_image'=>'Sony-In-Ear-SIE3-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],

            ['product_title'=>'Sony In Ear 4',
            'price'=>215,
            'feature_image'=>'Sony-In-Ear-SIE4-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],

            ['product_title'=>'Sony In Ear 5',
            'price'=>220,
            'feature_image'=>'Sony-In-Ear-SIE5-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],

            ['product_title'=>'Sony In Ear 6',
            'price'=>225,
            'feature_image'=>'Sony-In-Ear-SIE6-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],

            ['product_title'=>'Sony In Ear 7',
            'price'=>209,
            'feature_image'=>'Sony-In-Ear-SIE7-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],

            ['product_title'=>'Sony In Ear 8',
            'price'=>203,
            'feature_image'=>'Sony-In-Ear-SIE8-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],

            ['product_title'=>'Sony In Ear 9',
            'price'=>229,
            'feature_image'=>'Sony-In-Ear-SIE9-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],

            ['product_title'=>'Sony In Ear 10',
            'price'=>232,
            'feature_image'=>'Sony-In-Ear-SIE10-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>1],

            //--------------------------------------------------------------------In Ear - Westone
           

            //--------------------------------------------------------------------In ear Beats

            ['product_title'=>'Beats In Ear 1',
            'price'=>150,
            'feature_image'=>'Beats-In-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>4],

            //--------------------------------------------------------------------In ear Bang

            ['product_title'=>'Bang In Ear 1',
            'price'=>150,
            'feature_image'=>'Bang-In-Air-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>5],

            ['product_title'=>'Bang In Ear 2',
            'price'=>120,
            'feature_image'=>'Bang-In-Air-2.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>1,
            'brand_id'=>5],
            
            //--------------------------------------------------------------------On ear JBL

            ['product_title'=>'JBL On Ear 1',
            'price'=>250,
            'feature_image'=>'JBL-On-Ear-JOE1-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            ['product_title'=>'JBL On Ear 2',
            'price'=>259,
            'feature_image'=>'JBL-On-Ear-JOE2-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            ['product_title'=>'JBL On Ear 3',
            'price'=>255,
            'feature_image'=>'JBL-On-Ear-JOE3-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            ['product_title'=>'JBL On Ear 4',
            'price'=>267,
            'feature_image'=>'JBL-On-Ear-JOE4-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            ['product_title'=>'JBL On Ear 5',
            'price'=>269,
            'feature_image'=>'JBL-On-Ear-JOE5-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            ['product_title'=>'JBL On Ear 6',
            'price'=>280,
            'feature_image'=>'JBL-On-Ear-JOE6-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            ['product_title'=>'JBL On Ear 7',
            'price'=>300,
            'feature_image'=>'JBL-On-Ear-JOE7-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            ['product_title'=>'JBL On Ear 8',
            'price'=>326,
            'feature_image'=>'JBL-On-Ear-JOE8-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            ['product_title'=>'JBL On Ear 9',
            'price'=>310,
            'feature_image'=>'JBL-On-Ear-JOE9-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            ['product_title'=>'JBL On Ear 10',
            'price'=>307,
            'feature_image'=>'JBL-On-Ear-JOE10-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>2],

            //--------------------------------------------------------------------On ear sony

            ['product_title'=>'Sony On Ear 1',
            'price'=>209,
            'feature_image'=>'Sony-On-Ear-SOE1-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],

            ['product_title'=>'Sony On Ear 2',
            'price'=>396,
            'feature_image'=>'Sony-On-Ear-SOE2-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],

            ['product_title'=>'Sony On Ear 3',
            'price'=>348,
            'feature_image'=>'Sony-On-Ear-SOE3-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],

            ['product_title'=>'Sony On Ear 4',
            'price'=>329,
            'feature_image'=>'Sony-On-Ear-SOE4-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],

            ['product_title'=>'Sony On Ear 5',
            'price'=>361,
            'feature_image'=>'Sony-On-Ear-SOE5-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],

            ['product_title'=>'Sony On Ear 6',
            'price'=>371,
            'feature_image'=>'Sony-On-Ear-SOE6-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],

            ['product_title'=>'Sony On Ear 7',
            'price'=>369,
            'feature_image'=>'Sony-On-Ear-SOE7-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],

            ['product_title'=>'Sony On Ear 8',
            'price'=>328,
            'feature_image'=>'Sony-On-Ear-SOE8-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],

            ['product_title'=>'Sony On Ear 9',
            'price'=>367,
            'feature_image'=>'Sony-On-Ear-SOE9-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],

            ['product_title'=>'Sony On Ear 10',
            'price'=>333,
            'feature_image'=>'Sony-On-Ear-SOE10-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>1],
            

        //--------------------------------------------------------------------On ear westone

        //--------------------------------------------------------------------On ear Beats
            
            ['product_title'=>'Beats On Ear 1',
            'price'=>290,
            'feature_image'=>'Beats-On-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>4],

            ['product_title'=>'Beats On Ear 2',
            'price'=>310,
            'feature_image'=>'Beats-On-2.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>4],

            ['product_title'=>'Beats On Ear 3',
            'price'=>315,
            'feature_image'=>'Beats-On-3.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>4],

            ['product_title'=>'Beats On Ear 4',
            'price'=>323,
            'feature_image'=>'Beats-On-4.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>4],

        //--------------------------------------------------------------------On ear Bang    

            ['product_title'=>'Bang On Ear 1',
            'price'=>199,
            'feature_image'=>'Bang-On-Air-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>5],

            ['product_title'=>'Bang On Ear 2',
            'price'=>208,
            'feature_image'=>'Bang-On-Air-2.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>5],

            ['product_title'=>'Bang On Ear 3',
            'price'=>204,
            'feature_image'=>'Bang-On-Air-3.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>5],

            ['product_title'=>'Bang On Ear 4',
            'price'=>211,
            'feature_image'=>'Bang-On-Air-4.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>5],

            ['product_title'=>'Bang On Ear 5',
            'price'=>219,
            'feature_image'=>'Bang-On-Air-5.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>5],

            ['product_title'=>'Bang On Ear 6',
            'price'=>215,
            'feature_image'=>'Bang-On-Air-6.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>5],

            ['product_title'=>'Bang On Ear 7',
            'price'=>222,
            'feature_image'=>'Bang-On-Air-7.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>5],

            ['product_title'=>'Bang On Ear 8',
            'price'=>205,
            'feature_image'=>'Bang-On-Air-8.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>2,
            'brand_id'=>5],


            //--------------------------------------------------------------------True Sony
            
            ['product_title'=>'Sony True Wireless 1',
            'price'=>410,
            'feature_image'=>'Sony-True-Wireless-STW1-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>1],

            ['product_title'=>'Sony True Wireless 2',
            'price'=>481,
            'feature_image'=>'Sony-True-Wireless-STW2-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>1],

            ['product_title'=>'Sony True Wireless 3',
            'price'=>451,
            'feature_image'=>'Sony-True-Wireless-STW3-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>1],

            ['product_title'=>'Sony True Wireless 4',
            'price'=>468,
            'feature_image'=>'Sony-True-Wireless-STW4-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>1],

            ['product_title'=>'Sony True Wireless 5',
            'price'=>444,
            'feature_image'=>'Sony-True-Wireless-STW5-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>1],

            ['product_title'=>'Sony True Wireless 6',
            'price'=>419,
            'feature_image'=>'Sony-True-Wireless-STW6-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>1],

            ['product_title'=>'Sony True Wireless 7',
            'price'=>411,
            'feature_image'=>'Sony-True-Wireless-STW7-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>1],

            ['product_title'=>'Sony True Wireless 8',
            'price'=>415,
            'feature_image'=>'Sony-True-Wireless-STW8-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>1],

            //--------------------------------------------------------------------True JBL

            ['product_title'=>'JBL True Wireless 1',
            'price'=>351,
            'feature_image'=>'JBL-True-Wireless-JTW1-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>2],

            ['product_title'=>'JBL True Wireless 2',
            'price'=>333,
            'feature_image'=>'JBL-True-Wireless-JTW2-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>2],

            ['product_title'=>'JBL True Wireless 3',
            'price'=>368,
            'feature_image'=>'JBL-True-Wireless-JTW3-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>2],

            ['product_title'=>'JBL True Wireless 4',
            'price'=>315,
            'feature_image'=>'JBL-True-Wireless-JTW4-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>2],
            
            //--------------------------------------------------------------------True Bang

            ['product_title'=>'Bang True Wireless 4',
            'price'=>312,
            'feature_image'=>'Bang-True-1.jpg',
            'short_descriptions' => 'The product may have minimal scratches or dents, and a battery with at least 80% capacity. Box may be generic and accessories may not be original, but will be compatible and fully functional.',
            'long_descriptions' => '<table style="width:100%" class="table table-bordered">
	<thead>
		<tr>
			<th><strong>Product Dimensions</strong></th>
			<th>7.24 x 3.15 x 8.27 inches</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><strong>Item Weight</strong></td>
			<td>5.6 ounces</td>
		</tr>
		<tr>
			<td><strong>ASIN</strong></td>
			<td>B07HBD45MP</td>
		</tr>
		<tr>
			<td><strong>Item model number</strong></td>
			<td>S5PXW-L672</td>
		</tr>
		<tr>
			<td><strong>Batteries</strong></td>
			<td>1 Lithium Polymer batteries required. (included)</td>
		</tr>
		<tr>
			<td><strong>Is Discontinued By Manufacturer</strong></td>
			<td>No</td>
		</tr>
		<tr>
			<td><strong>Manufacturer</strong></td>
			<td>Default</td>
		</tr>
	</tbody>
</table>

<p>Experience 12 hours of battery life and rapid charge technology from light-weight headphones with a virtually indestructible headband. Riff Wireless even folds up when you&#39;re packing it on the go. It&#39;s everything you need, and nothing you don&#39;t.</p>

',
            'category_id'=>3,
            'brand_id'=>5],

        ]); 
    }
}