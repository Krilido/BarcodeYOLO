<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?=base_url()?>index.php/report">Admin</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><i class="icon-tasks"></i>
            <a href="<?=base_url()?>index.php/kantor">Kantor Aktif</a>
         </li>
    </ul>

    <div id="PeopleTableContainer" class="table"></div>
    <script type="text/javascript">

        $(document).ready(function () {

            //Prepare jTable
            $('#PeopleTableContainer').jtable({
                title: 'Tabel Kantor Aktif',
                paging: true,
                pageSize: 10,
                sorting: true,
                defaultSorting: 'kode_kantor ASC',
                actions: 
                {
                    listAction: '<?=base_url()?>index.php/kantor/listkantor',
                    createAction: '<?=base_url()?>index.php/kantor/createkantor', 
                    updateAction: '<?=base_url()?>index.php/kantor/updatekantor', 
                    deleteAction: '<?=base_url()?>index.php/kantor/nonaktifkantor'
                    
                },
                fields: 
                {
                    
                    id_kantor: 
                    {
                        key: true,
                        create: false,
                        edit: false,
                        list: false,
                        width: '8%'
                    },
                    nama_kantor: 
                    {
                        title: 'Nama Kantor',
                        width: '10%'
                    },
                    kode_kantor: 
                    {
                        title: 'Kode Kantor',
                        width: '10%'
                    },
                    lat_kantor: 
                    {
                        title: 'lat Kantor'                       
                    },
                    lng_kantor: 
                    {
                        title: 'lng Kantor'                      
                    }
                }
            });

            //Load person list from server
            $('#PeopleTableContainer').jtable('load');

        });

    </script>

</div>