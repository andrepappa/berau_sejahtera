# berau_sejahtera

menu data master
1. master pekerjaan
   	-id
   	-nm_pekerjaan
2. master agama
	-id
	-nm_agama
3. master pendidikan
	-id
	-nm_pendidikan
4. hubungan keluarga
	-id
	-nm_hub_keluarga

	Langkah2 :
	1.) php artisan make:migrations <nama_migrations>
		php artisan migrate

	2.) Buat Controller contoh php artisan make:controller DataMaster\PekerjaanController
	3.) Buat Model php artisan make:model Model\Pekerjaan
	4.) Buat View
	5.) buat menu di sidebar
	6.) buat DataTable Class
		  php artisan datatables:make PekerjaanDataTable