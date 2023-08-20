<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <script src="lib/cdnjs.cloudflare.com_ajax_libs_jquery_3.2.1_jquery.min.js"></script>
    <link href="lib/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="lib/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="lib/unpkg.com_bootstrap-table@1.22.1_dist_bootstrap-table.min.css" rel="stylesheet">

    <script src="lib/unpkg.com_tableexport.jquery.plugin@1.28.0_tableExport.min.js"></script>
    <script src="lib/unpkg.com_bootstrap-table@1.22.1_dist_bootstrap-table.min.js"></script>
    <script src="lib/unpkg.com_bootstrap-table@1.22.1_dist_bootstrap-table-locale-all.min.js"></script>
    <script src="lib/unpkg.com_bootstrap-table@1.22.1_dist_extensions_export_bootstrap-table-export.min.js"></script>

    <link rel="stylesheet" href="lib/cdn.jsdelivr.net_npm_bootstrap-icons@1.10.5_font_bootstrap-icons.css">
    
    <style>
        .select,
        #locale {
            width: 100%;
        }

        .like {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <table id="table" data-toolbar="#toolbar" data-search="true" data-show-refresh="true" data-show-fullscreen="true" data-show-columns="true"  data-show-export="true"  data-minimum-count-columns="2" data-show-pagination-switch="true" data-pagination="true" data-id-field="id" data-page-list="[10, 25, 50, 100, all]" data-show-footer="true" data-side-pagination="server" data-url="results-api.php" data-response-handler="responseHandler">
    </table>

    <script>
        var $table = $('#table')
        function responseHandler(res) {
            return res
        }

        function initTable() {
            $table.bootstrapTable('destroy').bootstrapTable({
                height: 550,
                locale: 'EN',
                columns: [
                    [{
                        title: ' ID',
                        field: 'id',
                        rowspan: 2,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                    }, {
                        title: 'Result Detail',
                        colspan: 6,
                        align: 'center'
                    }],
                    [{
                        field: 'name',
                        title: 'Name',
                        sortable: true,
                        align: 'center'
                    }, {
                        field: 'number',
                        title: 'Number',
                        sortable: true,
                        align: 'center',
                    }, {
                        field: 'unit',
                        title: 'Unit',
                        sortable: true,
                        align: 'center',
                    },
                    {
                        field: 'date',
                        title: 'Date',
                        sortable: true,
                        align: 'center',
                    },
                    {
                        field: 'result',
                        title: 'Result',
                        sortable: true,
                        align: 'center',
                    },
                    {
                        field: 'total',
                        title: 'Total',
                        sortable: true,
                        align: 'center',
                    }]
                ]
            })
        }

        $(function() {
            initTable()
        })
    </script>
</body>

</html>