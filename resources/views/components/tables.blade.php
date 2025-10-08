
<table class="table dataTables border-0"  >
    <thead>
    {{$thead ?? null}}
    </thead>
    <tbody>
    {{$tbody ?? null}}
    </tbody>
</table>


@push('js')
    <script>
        $( "#search" ).keypress(function() {
            var tables = $('.dataTables').DataTable();
            tables.search($('#search').val()).draw();  
        });


        $('#customCheckAll').change(
            function(){
                if ($(this).is(':checked')) {
                    $(".delete-checkbox").prop("checked", true);
                }else{
                    $(".delete-checkbox").prop("checked", false);
                }
        });

           
    </script>
@endpush