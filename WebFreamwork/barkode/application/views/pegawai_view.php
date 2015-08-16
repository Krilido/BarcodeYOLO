<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?=base_url()?>index.php/report">Admin</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><i class="icon-tasks"></i>
            <a href="<?=base_url()?>index.php/pegawai">Pegawai Aktif</a>
         </li>
    </ul>

    <div id="PeopleTableContainer" class="table"></div>
    <script type="text/javascript">

        $(document).ready(function () {

            //Prepare jTable
            $('#PeopleTableContainer').jtable({
                title: 'Tabel Pegawai Aktif',
                paging: true,
                pageSize: 10,
                sorting: true,
                defaultSorting: 'NIK ASC',
                actions: 
                {
                    listAction: '<?=base_url()?>index.php/pegawai/listpegawai', 
                    updateAction: '<?=base_url()?>index.php/pegawai/updatepegawai', 
                    deleteAction: '<?=base_url()?>index.php/pegawai/nonaktifpegawai'
                    
                },
                fields: 
                {
                    
                    NIK: 
                    {
                        key: true,
                        create: false,
                        edit: false,
                        width: '8%',
                        title: 'NIK'
                    },
                    nama_pegawai: 
                    {
                        title: 'Nama Pegawai',
                        create: false,
                        width: '10%'
                    },
                    jabatan: 
                    {
                        title: 'Jabatan',
                        create: false,
                        width: '10%'
                    },
                    alamat_pegawai: 
                    {
                        title: 'Alamat Pegawai',
                        create: false                            
                    }
                }
            });

            //Load person list from server
            $('#PeopleTableContainer').jtable('load');

        });

    </script>

</div>