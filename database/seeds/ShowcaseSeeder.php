<?php

use Illuminate\Database\Seeder;

use App\Produk;
use App\Harga;

use Carbon\Carbon;

class ShowcaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->produk();
	}

	private function produk(){
		DB::table('produks')->truncate();
		DB::table('hargas')->truncate();
		
		//INIT VARIABLE HELPER
		$faker		= \Faker\Factory::create();

		$produk[0] 	= [
			'nama'			=> 'Samsung Galaxy J2 Prime GARANSI RESMI SEIN',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/5/19/100189847/100189847_7acfdffb-b276-4f51-a316-6e568cfee2a4_839_727.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/5/19/100189847/100189847_7acfdffb-b276-4f51-a316-6e568cfee2a4_839_727.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 1825],
			'harga'			=> 1205000,
			'promo'			=> [
				'harga'		=> 1100000,
				'judul'		=> 'Promo Suka Suka',
				'hingga'	=> Carbon::now()->adddays(2),
			],
		];

		$produk[1] 	= [
			'nama'			=> 'Xiaomi Redmi 2 4G ( Ram 1gb /8gb) garansi distributor',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/12/29/2410700/2410700_e8158ae9-8403-4f2b-905d-371f2b3ff2e5_300_300.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/12/29/2410700/2410700_e8158ae9-8403-4f2b-905d-371f2b3ff2e5_300_300.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 1616],
			'harga'			=> 609000,
			'promo'			=> null,
		];

		$produk[2] 	= [
			'nama'			=> 'nokia 3310 normal,original,siap order',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2015/11/2/3347601/3347601_b508fcf3-470e-4fa2-a5f9-8d2882b4332b.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2015/11/2/3347601/3347601_b508fcf3-470e-4fa2-a5f9-8d2882b4332b.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2015/11/2/3347601/3347601_9439bee8-f2dc-4f9c-8d37-b2e333081871.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2015/11/2/3347601/3347601_27b8862e-d0a2-461d-a6ea-cf28cccbe721.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 4, 'frekuensi' => 94],
			'harga'			=> 135000,
			'promo'			=> null,
		];

		$produk[3] 	= [
			'nama'			=> 'SAMSUNG J2 PRIME SEIN',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/7/3/5322635/5322635_b4e42355-d83a-4eda-81f9-0fa48a742b38_640_640.jpeg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/7/3/5322635/5322635_b4e42355-d83a-4eda-81f9-0fa48a742b38_640_640.jpeg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 110],
			'harga'			=> 1210000,
			'promo'			=> null,
		];

		$produk[4] 	= [
			'nama'			=> 'PAKET NVR IP CAMERA WIRELESS 1080 LENSA 3MP 4 CH FULL HD KOMPLIT',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/4/12/0/0_92259f05-3c19-4f9d-b954-69a27259dc3f_960_960.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/4/12/0/0_92259f05-3c19-4f9d-b954-69a27259dc3f_960_960.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 5],
			'harga'			=> 3200000,
			'promo'			=> null,
		];

		$produk[5] 	= [
			'nama'			=> 'Kamera Sony Alpha A6000 Kit 16-50mm ILCE-6000L Garansi Resmi',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/7/31/17624274/17624274_77108409-7b12-48e9-9901-8a185ffe2084_1000_1000.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/7/31/17624274/17624274_77108409-7b12-48e9-9901-8a185ffe2084_1000_1000.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 135],
			'harga'			=> 6650000,
			'promo'			=> [
				'harga'		=> 6000000,
				'judul'		=> 'Promo Suka Suka',
				'hingga'	=> Carbon::now()->adddays(2),
			],
		];

		$produk[6] 	= [
			'nama'			=> 'Sony H400 Cyber-Shot',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/10/5/20728140/20728140_666302d4-65b9-42f2-87a4-de4a197acd79_1920_1280.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/10/5/20728140/20728140_666302d4-65b9-42f2-87a4-de4a197acd79_1920_1280.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 48],
			'harga'			=> 3425000,
			'promo'			=> null,
		];

		$produk[7] 	= [
			'nama'			=> 'Sony Bravia KD-55X7000F 55 Inch UHD 4K Smart LED TV 55X7000 KD55X7000F',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/9/15/8859714/8859714_b5539c62-c986-4723-a86a-ecebc0b1933b_480_320.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/9/15/8859714/8859714_b5539c62-c986-4723-a86a-ecebc0b1933b_480_320.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 1],
			'harga'			=> 9000000,
			'promo'			=> null,
		];

		$produk[8] 	= [
			'nama'			=> 'Sony Bravia 32" Inch LED HD TV KLV 32R302C',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/7/1/724048/724048_0b1e2367-ff67-41a8-acc2-28a0021a5c95_1200_1200.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/7/1/724048/724048_0b1e2367-ff67-41a8-acc2-28a0021a5c95_1200_1200.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 3],
			'harga'			=> 3150000,
			'promo'			=> null,
		];

		$produk[9] 	= [
			'nama'			=> 'Original 100% Xiaomi Earphone Mi Piston Air Capsules',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/1/0/0_d2853aaa-24b2-4867-88f7-c30bad35883b_640_420.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/1/0/0_d2853aaa-24b2-4867-88f7-c30bad35883b_640_420.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/1/0/0_4521ffb6-d752-48a7-abbd-2689cc5336f8_652_555.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2017/9/1/0/0_088d0520-3031-4ef8-92b3-86587e30ec33_700_783.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/catalog/2017/10/18/17027990/17027990_b0566874-7e67-4b58-8af6-afbc29058f53.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/catalog/2017/10/18/7492183/7492183_68e437d0-6876-46c6-9d1b-e094116ec9b7.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 1],
			'harga'			=> 250000,
			'promo'			=> [
				'harga'		=> 188000,
				'judul'		=> 'MiPromo',
				'hingga'	=> Carbon::now()->adddays(2),
			],
		];

		$produk[10] 	= [
			'nama'			=> 'Sandisk Ultra Flair USB 3.0 Flash Drive (130MB/s) - 16GB',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2015/12/1/754334/754334_4f11c74b-593a-403d-9a5d-ecc92d4bd48f.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2015/12/1/754334/754334_4f11c74b-593a-403d-9a5d-ecc92d4bd48f.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2015/12/1/754334/754334_351024d7-c8ee-47be-b867-d180ac7ae898.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2015/12/1/754334/754334_42f61182-a3ec-4f8b-8090-b35d344fd8fc.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2015/12/1/754334/754334_c3dd9e80-5497-4ad5-9a41-3464f376869c.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 6],
			'harga'			=> 89500,
			'promo'			=> null,
		];

		$produk[11] 	= [
			'nama'			=> 'Omni Directional 1D Panda PRJ-9820 Laser Barcode Scanner Duduk USB',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/attachment/2019/1/24/154826916887237/154826916887237_5023caf3-7b6d-4ccf-ad0d-5677c97d43cd.png',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/attachment/2019/1/24/154826916887237/154826916887237_5023caf3-7b6d-4ccf-ad0d-5677c97d43cd.png',
				'https://ecs7.tokopedia.net/img/cache/700/attachment/2018/9/13/153683007183481/153683007183481_eff0d648-bf7b-485e-9957-08f435b06814.png',
				'https://ecs7.tokopedia.net/img/cache/700/attachment/2018/9/13/153683680709524/153683680709524_eabaeecf-96c9-4ad1-9eed-536f670f8d63.png',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 51],
			'harga'			=> 805000,
			'promo'			=> null,
		];

		$produk[12] 	= [
			'nama'			=> 'Barcode Scanner EPPOS EP1020M Murah Meriah Mantap',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2016/11/10/1874980/1874980_4773fcd0-d843-40b1-9e00-19b036ea6564.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2016/11/10/1874980/1874980_4773fcd0-d843-40b1-9e00-19b036ea6564.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/10/4/1874980/1874980_99336bb4-6f7a-48ad-8c66-a2b81eb556a2_1000_1002.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/10/4/1874980/1874980_ad479638-489a-4548-9af2-d7ba749bd413_1000_982.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 254],
			'harga'			=> 194900,
			'promo'			=> null,
		];

		$produk[13] 	= [
			'nama'			=> 'CHEERLUX C6 Mini Proyektor Projector Portable LED LCD + TV',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/12/20/19187018/19187018_ffacccb5-b7a4-44b7-a5b9-6ddf93766921_700_700.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/12/20/19187018/19187018_ffacccb5-b7a4-44b7-a5b9-6ddf93766921_700_700.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/12/20/19187018/19187018_152af2ad-c8e2-4d80-90c8-de92b0501446_700_700.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/12/20/19187018/19187018_5561d84b-2646-48ac-90d9-9c374db72f04_700_700.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 0, 'frekuensi' => 0],
			'harga'			=> 728000,
			'promo'			=> null,
		];

		$produk[14] 	= [
			'nama'			=> 'Mini Printer Thermal Bluetooth 58mm EPPOS EP5802AI - Android iOS',
			'thumbnail'		=> 'https://ecs7.tokopedia.net/img/cache/700/product-1/2016/8/27/1874980/1874980_60fd880e-a473-42e3-bc27-87c70415f58a.jpg',
			'gallery'		=> [
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2016/8/27/1874980/1874980_60fd880e-a473-42e3-bc27-87c70415f58a.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2016/8/27/1874980/1874980_bbe6176b-25e0-4ecb-ac99-8085fc0f7928.jpg',
				'https://ecs7.tokopedia.net/img/cache/700/product-1/2016/8/27/1874980/1874980_5d8225b8-7108-422f-8ad7-aa929e3dbf8c.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 799],
			'harga'			=> 483900,
			'promo'			=> null,
		];

		foreach ($produk as $k => $v) {
			//1. Produk
			$stuff 				= new Produk;
			$stuff->nama 		= $v['nama'];
			$stuff->pengaturan 	= ['thumbnail' => $v['thumbnail'], 'gallery' => $v['gallery'], 'rating' => $v['rating']];
			$stuff->save();

			//2. HARGA
			$harga 				= new Harga;
			$harga->mulai 		= Carbon::now();
			$harga->label 		= 'normal';
			$harga->harga 		= $v['harga'];
			$harga->produk_id 	= $stuff->id;
			$harga->save();

			//3. PROMO
			if(!empty($v['promo'])){
				$promo 	 			= new Harga;
				$promo->mulai 		= Carbon::now();
				$promo->label 		= 'promo';
				$promo->harga 		= $v['promo']['harga'];
				$promo->pengaturan	= ['judul' => $v['promo']['judul']];
				$promo->hingga 		= $v['promo']['hingga'];
				$promo->produk_id 	= $stuff->id;
				$promo->save();
			}
		}
	}
}
