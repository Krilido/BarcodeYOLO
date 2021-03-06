<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="report.php">Admin</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><i class="icon-tasks"></i>
            <a href="report.php">Report</a>
         </li>
    </ul>
    <form>
    	<table width="330" border="0" align="center" cellpadding="0">
		    <tr bgcolor="grey">
                <p>
                   <strong>Cari Report</strong>
            	</p>
            </tr>
            <p>
			    <label for="nik"><strong>NIK</strong></label>
			    <input type="text" name="nik" id="nik">
			</p>
			<p>
			    <label for="nama"><strong>Nama</strong></label>
			    <input type="text" name="nama" id="nama_pegawai">
			</p>
			    <button type="submit" name="go" id="go">Cari</button>
		</table>
    </form>
	<div id="PeopleTableContainer" class="table"></div>
		<script type="text/javascript">

			$(document).ready(function () {

			    //Prepare jTable
				$('#PeopleTableContainer').jtable({
					title: 'Tabel Absensi Hari ini',
					paging: true,
					pageSize: 10,
					sorting: true,
					defaultSorting: 'waktu_masuk ASC',
					actions: {
						listAction: '<?=base_url()?>index.php/carireport/sales'
					},
					fields: {
						
						NIK: {
							key: true,
							create: false,
							edit: false,
							width: '8%',
							title: 'NIK'
						},
						nama_pegawai: {
							title: 'Nama Pegawai',
							create: false,
							width: '10%',
							edit: false
						},
						nama_kantor: {
							title: 'Nama Kantor',
							create: false,
							width: '10%',
							edit: false
						},
						waktu_masuk: {
							title: 'Waktu Masuk',
							create: false,
							edit: false,
							type: 'time'
							
						},
						jarak: {
							title: 'Jarak',
							create: false,
							width: '5%',
							edit: false,
							
						}
					}
				});

				//Load person list from server
				$('#go').click(function (e) {
			        e.preventDefault();
			        $('#PeopleTableContainer').jtable('load', {
			            nik: $('#nik').val(),
			            nama_pegawai: $('#nama_pegawai').val()
		        	});
			 	});
				
			});

		</script>
	</div>
