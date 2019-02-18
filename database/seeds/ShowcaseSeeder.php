<?php

use Illuminate\Database\Seeder;

use App\Produk;
use App\Harga;

use App\Grup;
use App\ProdukGrup;

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
		$this->grup();
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
			'nama'			=> 'Xiaomi Redmi 2 4G ( Ram 1gb /8gb) garansi distributor warna putih',
			'thumbnail'		=> 'https://media.pricebook.co.id/images/product/L/22532_L_1.jpg',
			'gallery'		=> [
				'https://media.pricebook.co.id/images/product/L/22532_L_1.jpg',
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

		$produk[15] 	= [
			'nama'			=> 'Xiaomi Redmi 2 4G ( Ram 1gb /8gb) garansi distributor warna hitam',
			'thumbnail'		=> 'https://ik.imagekit.io/inponsel/images/galeri/0-inponsel-xiaomi-redmi-2s-150105-44-31.jpg',
			'gallery'		=> [
				'https://ik.imagekit.io/inponsel/images/galeri/0-inponsel-xiaomi-redmi-2s-150105-44-31.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 140],
			'harga'			=> 609000,
			'promo'			=> null,
		];

		$produk[16] 	= [
			'nama'			=> 'Xiaomi Redmi 2 4G ( Ram 1gb /8gb) garansi distributor warna kuning',
			'thumbnail'		=> 'https://ik.imagekit.io/inponsel/images/galeri/1-inponsel-xiaomi-redmi-2s-150105-45-31.jpg',
			'gallery'		=> [
				'https://ik.imagekit.io/inponsel/images/galeri/1-inponsel-xiaomi-redmi-2s-150105-45-31.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 21000],
			'harga'			=> 659000,
			'promo'			=> null,
		];

		$produk[17] 	= [
			'nama'			=> 'Xiaomi Redmi 2 4G ( Ram 1gb /8gb) garansi distributor warna pink',
			'thumbnail'		=> 'https://ik.imagekit.io/inponsel/images/galeri/3-inponsel-xiaomi-redmi-2s-150105-38-31.jpg',
			'gallery'		=> [
				'https://ik.imagekit.io/inponsel/images/galeri/3-inponsel-xiaomi-redmi-2s-150105-38-31.jpg',
			],
			'rating'		=> ['indikator' => 5, 'user_rate' => 5, 'frekuensi' => 2096],
			'harga'			=> 609000,
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

	private function grup(){

		DB::table('grups')->truncate();
		DB::table('produk_grup')->truncate();

		//1. kategori
		$kat[0]	= [
			'nama'		=> 'Gadget',
			'thumbnail'	=> 'http://scitechoutpost.com/wp-content/uploads/2017/04/gadgets-in-hand-1000x500-696x348.jpg',
			'sub'	=> [
				[
					'nama'		=> 'Handphone',
					'thumbnail'	=> 'https://www.joshuanoerr.com/wp-content/uploads/2016/11/joshuanoerr_handphone-bagus-696x464.png',
					'pgr'		=> [1,2,3,4,16,17,18],
				],
				[
					'nama'	=> 'Tablet',
					'thumbnail'	=> 'https://cdn.thewirecutter.com/wp-content/uploads/2018/07/tablets-top-2x1-lowres1024-9464.jpg',
					'pgr'		=> [],
				]
			]
		];

		$kat[1]	= [
			'nama'		=> 'TV',
			'thumbnail'	=> 'https://brain-images-ssl.cdn.dixons.com/4/9/10161494/u_10161494.jpg',
			'sub'		=> [
				[
					'nama'		=> 'LED TV',
					'thumbnail'	=> 'https://brain-images-ssl.cdn.dixons.com/4/9/10161494/u_10161494.jpg',
					'pgr'		=> [8,9],
				],
				[
					'nama'	=> 'LCD TV',
					'thumbnail'	=> 'https://brain-images-ssl.cdn.dixons.com/4/9/10161494/u_10161494.jpg',
					'pgr'		=> [],
				],
				[
					'nama'	=> 'PLASMA TV',
					'thumbnail'	=> 'https://brain-images-ssl.cdn.dixons.com/4/9/10161494/u_10161494.jpg',
					'pgr'		=> [],
				],
				[
					'nama'	=> 'Remote TV',
					'thumbnail'	=> 'https://brain-images-ssl.cdn.dixons.com/4/9/10161494/u_10161494.jpg',
					'pgr'		=> [],
				],
				[
					'nama'		=> 'Antenna TV',
					'thumbnail'	=> 'https://brain-images-ssl.cdn.dixons.com/4/9/10161494/u_10161494.jpg',
					'pgr'		=> [],
				]
			]
		];

		$kat[2]	= [
			'nama'		=> 'Kamera',
			'thumbnail'	=> 'https://image03.digitalrev.com/images/features/best_cameras_for_you/images/banner.jpg',
			'sub'		=> [
				[
					'nama'		=> 'IP Cam',
					'thumbnail'	=> 'https://cdn5.f-cdn.com/contestentries/927578/8154646/587de3d876346_thumb900.jpg',
					'pgr'		=> [5],
				],
				[
					'nama'		=> 'Kamera Digital',
					'thumbnail'	=> 'https://image03.digitalrev.com/images/features/best_cameras_for_you/images/banner.jpg',
					'pgr'		=> [6,7],
				],
				[
					'nama'		=> 'Kamera Pocket',
					'thumbnail'	=> 'https://image03.digitalrev.com/images/features/best_cameras_for_you/images/banner.jpg',
					'pgr'		=> [],
				]
			]
		];

		$kat[3]	= [
			'nama'		=> 'Extend Komputer',
			'thumbnail'	=> 'https://png.pngtree.com/thumb_back/fw800/back_pic/00/04/05/355620cebeac156.jpg',
			'sub'	=> [
				[
					'nama'		=> 'Barcode Scanner',
					'thumbnail'	=> 'http://mahiprinters.com/wp-content/uploads/2015/04/banner_4.jpg',
					'pgr'		=> [12,13],
				],
				[
					'nama'		=> 'Flashdisk',
					'thumbnail'	=> 'http://diklikaja.com/img/fitur-produk/Adata/flashdisk/UC370/banner-adata-uc370_1.jpg',
					'pgr'		=> [11],
				],
				[
					'nama'		=> 'LCD / Proyektor',
					'thumbnail'	=> 'http://lexiconsystems.in/images/banner3.jpg',
					'pgr'		=> [14],
				]
			]
		];

		$kat[4]	= [
			'nama'		=> 'Printer',
			'thumbnail'	=> 'https://usam.in/wp-content/uploads/2018/11/HP-Printer-Banner.png',
			'sub'	=> [
				[
					'nama'		=> 'Printer Inkjet',
					'thumbnail'	=> 'https://usam.in/wp-content/uploads/2018/11/HP-Printer-Banner.png',
					'pgr'		=> [],
				],
				[
					'nama'		=> 'Thermal Printer',
					'thumbnail'	=> 'http://www.winpos.com.tw/images/banner.jpg',
					'pgr'		=> [15]
				]
			]
		];

		$kat[4]	= [
			'nama'		=> 'Aksesoris Handphone',
			'thumbnail'	=> 'https://www.courts.com.sg/media/wysiwyg/Landing_pages/Headphones/J374432_COURTS_July_Website_Headphones_Carousel_Banner_930_W_X360px_H__V1.jpg',
			'sub'		=> [
				[
					'nama'		=> 'Earphone',
					'thumbnail'	=> 'https://www.courts.com.sg/media/wysiwyg/Landing_pages/Headphones/J374432_COURTS_July_Website_Headphones_Carousel_Banner_930_W_X360px_H__V1.jpg',
					'pgr'		=> [10],
				],
			]
		];

		foreach ($kat as $k => $v) {
			$pr 	= new Grup;
			$pr->nama 		= $v['nama'];
			$pr->jenis 		= 'kategori';
			$pr->mulai 		= Carbon::now();
			$pr->pengaturan	= ['thumbnail' => $v['thumbnail']];
			$pr->save();

			foreach ($v['sub'] as $k2 => $v2) {
				$kd 	= new Grup;
				$kd->nama 	 	= $v2['nama'];
				$kd->jenis 	 	= 'kategori';
				$kd->mulai 	 	= Carbon::now();
				$kd->grup_id 	= $pr->id;
				$kd->pengaturan	= ['thumbnail' => $v2['thumbnail']];
				$kd->save();

				foreach ($v2['pgr'] as $k3 => $v3) {
					$pgr 	= new ProdukGrup;
					$pgr->grup_id 	= $kd->id;
					$pgr->produk_id = $v3;
					$pgr->save();
				}
			}
		}

		//2. filter
		$filt[0]	= [
			'nama'		=> 'Merk',
			'thumbnail'	=> 'http://mediasuite.co/cms/wp-content/uploads/2014/10/Samsung-S4-Wallpaper.jpg',
			'sub'	=> [
				[
					'nama'		=> 'Samsung',
					'thumbnail'	=> 'http://mediasuite.co/cms/wp-content/uploads/2014/10/Samsung-S4-Wallpaper.jpg',
					'pgr'		=> [1,4],
				],
				[
					'nama'		=> 'Xiaomi',
					'thumbnail'	=> 'https://uidesign.gbtcdn.com/GB/images/promotion/2018/xiaomi8/bannerb.jpg',
					'pgr'		=> [2,10,16,17,18],
				],
				[
					'nama'		=> 'CHEERLUX',
					'thumbnail'	=> 'http://www.cheerlux.com/uploadfile/2017/0412/20170412050232577.jpg',
					'pgr'		=> [10],
				],
				[
					'nama'		=> 'Nokia',
					'thumbnail'	=> 'http://fs2.directupload.net/images/150419/rvpnhtp9.jpg',
					'pgr'		=> [3],
				],
				[
					'nama'		=> 'Sony',
					'thumbnail'	=> 'https://www.fixationuk.com/wp-content/uploads/2016/11/1400x350-sony-fs-7-banner.jpg',
					'pgr'		=> [6,7,8,9],
				],
				[
					'nama'		=> 'Sandisk',
					'thumbnail'	=> 'https://www.paradisestore.id/uploads/brands/sANDISK-0-banner-21.jpg',
					'pgr'		=> [11],
				],
				[
					'nama'		=> 'EPPOS',
					'thumbnail'	=> 'http://www.cessoftware.com/images/restaurant-banner.jpg',
					'pgr'		=> [13,15],
				]
			]
		];

		$filt[1]	= [
			'nama'		=> 'Kondisi',
			'thumbnail'	=> 'https://3xa7c5382usg2qrwom1i8vcz-wpengine.netdna-ssl.com/wp-content/uploads/2018/07/new.jpg',
			'sub'		=> [
				[
					'nama'		=> 'Baru',
					'thumbnail'	=> 'https://3xa7c5382usg2qrwom1i8vcz-wpengine.netdna-ssl.com/wp-content/uploads/2018/07/new.jpg',
					'pgr'		=> [1,2,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18],
				],
				[
					'nama'		=> 'Bekas',
					'thumbnail'	=> 'https://previews.123rf.com/images/imagecatalogue/imagecatalogue1612/imagecatalogue161200650/68001772-second-hand-text-rubber-seal-stamp-watermark-tag-inside-rounded-rectangular-banner-with-grunge-desig.jpg',
					'pgr'		=> [3]
				],
			]
		];

		foreach ($filt as $k => $v) {
			$pr 			= new Grup;
			$pr->nama 		= $v['nama'];
			$pr->jenis 		= 'filter';
			$pr->mulai 		= Carbon::now();
			$pr->pengaturan	= ['thumbnail' => $v['thumbnail']];
			$pr->save();

			foreach ($v['sub'] as $k2 => $v2) {
				$kd 			= new Grup;
				$kd->nama 	 	= $v2['nama'];
				$kd->jenis 	 	= 'filter';
				$kd->mulai 	 	= Carbon::now();
				$kd->grup_id 	= $pr->id;
				$kd->pengaturan	= ['thumbnail' => $v2['thumbnail']];
				$kd->save();

				foreach ($v2['pgr'] as $k3 => $v3) {
					$pgr 	= new ProdukGrup;
					$pgr->grup_id 	= $kd->id;
					$pgr->produk_id = $v3;
					$pgr->save();
				}
			}
		}

		//3. produk series
		$series[0]	= [
			'nama'		=> 'Warna',
			'thumbnail'	=> 'https://ecs7.tokopedia.net/img/cache/700/catalog/2018/2/15/25750062/25750062_bc4ac2ad-2998-4813-b815-a6db0172bf8a.png',
			'pgr'		=> [2, 16, 17, 18],
		];

		foreach ($series as $k => $v) {
			$pr 			= new Grup;
			$pr->nama 		= $v['nama'];
			$pr->jenis 		= 'series';
			$pr->mulai 		= Carbon::now();
			$pr->pengaturan	= ['thumbnail' => $v2['thumbnail']];
			$pr->save();

			foreach ($v['pgr'] as $k3 => $v3) {
				$pgr 	= new ProdukGrup;
				$pgr->grup_id 	= $pr->id;
				$pgr->produk_id = $v3;
				$pgr->save();
			}
		}


		//4. promo
		$promo[0]	= [
			'nama'		=> 'Promo Suka Suka',
			'thumbnail'	=> 'https://i2.wp.com/easyaccountingsystem.co.id/wp-content/uploads/2018/03/promo-suka-suka-post.jpg',
			'pgr'		=> [1,6]
		];
		$promo[1]	= [
			'nama'		=> 'MiPromo',
			'thumbnail'	=> 'https://is4-ssl.mzstatic.com/image/thumb/Purple128/v4/09/e0/ba/09e0ba57-3b6f-2cd9-3b8a-7a9642c6a275/AppIcon-0-1x_U007emarketing-0-0-85-220-10.png/1200x630wa.png',
			'pgr'		=> [10]
		];

		foreach ($promo as $k => $v) {
			$pr 	= new Grup;
			$pr->nama 	= $v['nama'];
			$pr->jenis 	= 'promo';
			$pr->mulai 	= Carbon::now();
			$pr->hingga = Carbon::now()->adddays(7);
			$pr->pengaturan 	= ['thumbnail' => $v['thumbnail']];
			$pr->save();

			foreach ($v['pgr'] as $k3 => $v3) {
				$pgr 	= new ProdukGrup;
				$pgr->grup_id 	= $kd->id;
				$pgr->produk_id = $v3;
				$pgr->save();
			}
		}
	}
}
