<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guestbook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     [{"kode":"11","nama":"ACEH"},{"kode":"12","nama":"SUMATERA UTARA"},{"kode":"13","nama":"SUMATERA BARAT"},{"kode":"14","nama":"RIAU"},{"kode":"15","nama":"JAMBI"},{"kode":"16","nama":"SUMATERA SELATAN"},{"kode":"17","nama":"BENGKULU"},{"kode":"18","nama":"LAMPUNG"},{"kode":"19","nama":"KEP. BANGKA BELITUNG"},{"kode":"21","nama":"KEP. RIAU"},{"kode":"31","nama":"DKI JAKARTA"},{"kode":"32","nama":"JAWA BARAT"},{"kode":"33","nama":"JAWA TENGAH"},{"kode":"34","nama":"DI YOGYAKARTA"},{"kode":"35","nama":"JAWA TIMUR"},{"kode":"36","nama":"BANTEN"},{"kode":"51","nama":"BALI"},{"kode":"52","nama":"NUSA TENGGARA BARAT"},{"kode":"53","nama":"NUSA TENGGARA TIMUR"},{"kode":"61","nama":"KALIMANTAN BARAT"},{"kode":"62","nama":"KALIMANTAN TENGAH"},{"kode":"63","nama":"KALIMANTAN SELATAN"},{"kode":"64","nama":"KALIMANTAN TIMUR"},{"kode":"65","nama":"KALIMANTAN UTARA"},{"kode":"71","nama":"SULAWESI UTARA"},{"kode":"72","nama":"SULAWESI TENGAH"},{"kode":"73","nama":"SULAWESI SELATAN"},{"kode":"74","nama":"SULAWESI TENGGARA"},{"kode":"75","nama":"GORONTALO"},{"kode":"76","nama":"SULAWESI BARAT"},{"kode":"81","nama":"MALUKU"},{"kode":"82","nama":"MALUKU UTARA"},{"kode":"91","nama":"PAPUA BARAT"},{"kode":"94","nama":"PAPUA"}]
     */
    public function up()
    {
        Schema::create('guestbook', function (Blueprint $table) {
            $table->id();
            $table->char('first', 15);
            $table->char('last', 15);
            $table->char('organization', 50);
            $table->char('address', 50);
            $table->char('province', 50);
            $table->char('city', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
