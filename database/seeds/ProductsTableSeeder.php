<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Meizu 16 6/64GB',
                'code' => 'meizu_16_64GB',
                'description' => 'Экран (6.0", Super AMOLED, 2160x1080)/ Qualcomm Snapdragon 710 (2 x 2.2 ГГц + 6 x 1.7 ГГц)/
                 двойная основная камера: 12 Мп + 20 Мп, фронтальная камера: 20 Мп/ RAM 6 ГБ/ 64 ГБ встроенной памяти/ 
                 3G/ LTE/ GPS/ ГЛОНАСС/ поддержка 2х SIM-карт (Nano-SIM)/ Android 8.1 (Oreo)/ 3100 мА*ч',
                'price' => 4999,
                'img' => 'products/meizu_16_6_64gb.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 1,
                'name' => 'Nokia 7.2 4/64GB',
                'code' => 'nokia_4_64GB',
                'description' => 'Экран (6.3", IPS, 2280x1080) / Qualcomm Snapdragon 660 (4 x 2.2 ГГц + 4 x 1.8 ГГц) / 
                 основная тройная камера: 48 Мп + 8 Мп + 5 Мп, фронтальная камера: 20 Мп / RAM 4 ГБ / 64 ГБ встроенной 
                 памяти + microSD/SDHC (до 512 ГБ) / 3G / LTE / GPS / ГЛОНАСС / BDS / поддержка 2х SIM-карт (Nano-SIM) 
                 / Android 9.0 (Pie) / 3500 мА*ч',
                'price' => 5499,
                'img' => 'products/nokia_7_2_4_64gb.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 1,
                'name' => 'Samsung Galaxy S9 64GB',
                'code' => 'samsung_S9',
                'description' => 'Экран (5.8", Super AMOLED, 2960х1440)/ Samsung Exynos 9810 (4 x 2.7 ГГц + 4 x 1.7 ГГц)/
                 основная камера 12 Мп + фронтальная 8 Мп/ RAM 4 ГБ/ 64 ГБ встроенной памяти + microSD (до 400 ГБ)/ 3G/ 
                 LTE/ GPS/ поддержка 2х SIM-карт (Nano-SIM)/ Android 8.0 (Oreo) / 3000 мА*ч',
                'price' => 11999,
                'img' => 'products/samsung_galaxy_s9_64gb.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 1,
                'name' => 'Meizu 16 6/128GB',
                'code' => 'meizu_6_128',
                'description' => 'Экран (6.0", Super AMOLED, 2160x1080)/ Qualcomm Snapdragon 710 (2 x 2.2 ГГц + 6 x 1.7 ГГц)/
                 двойная основная камера: 12 Мп + 20 Мп, фронтальная камера: 20 Мп/ RAM 6 ГБ/ 128 ГБ встроенной памяти/
                 3G/ LTE/ GPS/ ГЛОНАСС/ поддержка 2х SIM-карт (Nano-SIM)/ Android 8.1 (Oreo)/ 3100 мА*ч',
                'price' => 5699,
                'img' => 'products/copy_meizu_16_6_64gb.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 2,
                'name' => 'Razer Kraken Ultimate Black',
                'code' => 'razet_kraken',
                'description' => 'Тип наушников Полноразмерные Диапазон частот наушников 12 Гц – 20 кГц
                 Вес 390 г Страна регистрации бренда США',
                'price' => 3299,
                'img' => 'products/razer_rz04.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 2,
                'name' => 'Фотоаппарат Canon EOS 4000D',
                'code' => 'canon_eos',
                'description' => 'Матрица 22.3 x 14.9 мм, 18 Мп / объектив 18-55 мм III / Зум: 3х (оптический) /
                 поддержка карт памяти SD/SDHC/SDXC / 2.7" ЖК-экран / Full HD-видео / Wi-Fi / питание от литиево-ионного 
                 аккумулятора / 129 x 101.6 x 77.1 мм, 436 г (только корпус) / черный',
                'price' => 9299,
                'img' => 'products/canon_3011.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 2,
                'name' => 'Видеокамера Sony Handycam',
                'code' => 'soni_handycam',
                'description' => 'Тип носителя Flash память Матрица (светочувствительный элемент) Тип: 1-дюймовая
                 многослойная CMOS-матрица Exmor RS (13.2 x 8.8 мм) Эффективные пиксели (фото): приблизительно 14.2 Мп 
                 (16:9) / приблизительно 12 Мп (3:2) Эффективные пиксели (видео): приблизительно 14.2 Мп (16:9) Зум
                 Оптический: 12x Цифровой Clear Image: 4K - 18x, HD - 24x Цифровой: 192x Страна регистрации бренда Япония',
                'price' => 49899,
                'img' => 'products/sony_fdrax700b.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 3,
                'name' => 'Кофемашина Liberty`s Aulika',
                'code' => 'liberty_aulika',
                'description' => 'Тип Кофемашина эспрессо Тип используемого кофе Зерновой Тип управления
                 Кнопочное Резервуар для воды 2.2 л Цвет Черный Дисплей Есть Габариты (ВхШхГ)
                 45.2 x 33.4 х 38 см Страна регистрации бренда Италия',
                'price' => 15799,
                'img' => 'products/liberty.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 3,
                'name' => 'Холодильник BOSCH',
                'code' => 'bosch',
                'description' => 'Цвет Нержавеющая сталь Система разморозки No Frost (Frost Free) Холодильное+морозильное отделения
                 Тип холодильника Двухкамерный Полезный объем холодильной камеры 279 л
                 Полезный объем морозильной камеры 87 л Количество компрессоров 1 Тип управления Электронное Габариты (ВхШхГ)
                 203 x 60 x 66 см Вес 80 кг Страна регистрации бренда Германия',
                'price' => 14999,
                'img' => 'products/bosch_kgn39vi306.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 3,
                'name' => 'Блендер BRAUN MQ 3135',
                'code' => 'braun',
                'description' => 'Мощность, Вт 750 Емкость стакана 600 мл Тип Погружной Измельчитель С измельчителем
                 Цвет изделия Белый Материал ножки блендера Металл Кол-во скоростей 11 Габариты (ВхШхГ)
                 41 х 6.8 х 6.8 см Страна регистрации бренда Германия',
                'price' => 1399,
                'img' => 'products/braun_mq_3135_wh_sauce.jpg',
                'count' => rand(0,10),
            ],
            [
                'category_id' => 3,
                'name' => 'Мясорубка BOSCH MFW68660',
                'code' => 'bosch_vn',
                'description' => 'Материал корпуса Пластик/металл Макс. мощность при блокировке двигателя 2200.0000 Вт
                 Номинальная мощность 800.0000 Вт Габариты (ВхШхГ) 25.4х19.9х29.5 см Страна регистрации бренда Германия',
                'price' => 7999,
                'img' => 'products/bosch-mfw.jpg',
                'count' => rand(0,10),
            ],

        ]);
    }
}
