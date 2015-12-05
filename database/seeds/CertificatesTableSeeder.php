<?php

use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder {

	public function run()
	{
		$existing = DB::table('certificates')->count();
		if( !$existing )
		{
			$certificates = ['UC','U','PG','12','12A','15','18'];

			array_map( function( $certificate ) {
				DB::table('certificates')->insert([
					'certificate_title' => $certificate
				]);
			}, $certificates);

		} // end of if

	} // end of method

} // end of class
