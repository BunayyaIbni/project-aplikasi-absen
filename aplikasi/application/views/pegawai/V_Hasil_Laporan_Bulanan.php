<?php
if(count($ci->result())>0){
    foreach ($ci->result() as $row){
    $html='
    <h3>Laporan : '.$row->nama_pegawai.'</h3>

                    <table border="1" align="center">
                    <tr>
                     	<th>NO</th>
						
						<th>Nama Kegiatan</th>
						<th>Uraian</th>
						<th>Tanggal</th>
						<th>Screenshoot</th>
					</tr>';
}
					foreach ($ci->result() as $row)
                	{
                   		$html.='<tr>

                            <td>'.$row->nama_kegiatan.'</td>
                            <td>'.$row->uraian.'</td>
                            <td>'.$row->tanggal.'</td>
                            <td><img src="gambar/'.$row->screenshoot.'" widht="50" height="128"></td>
                            
                        </tr>';
                	}
            $html.='</table>';

    	}else{
    		echo "<center>";
    		echo "data tidak ada";
    		echo "<br>";
    		echo "<a href='".base_url('pegawai/laporan_bulanan')."'>Kembali</a>";
    	}
?>