@section('script3')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#datatable3').dataTable();

            table.on('click', '.edit', function() {

                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                    $tr = $tr.prev('.parent');
                }

                var data = table.row($tr).data();
                console.log(data);

                $('#name').val(data[1]);
                $('#username').val(data[2]);
                $('#gender').val(data[3]);
                $('#address').val(data[4]);
                $('#email').val(data[5]);

                $('#editFormAdmin').attr('action', '/dashboard/admins/' + data[0]);
                $('#editModalAdmin').modal('show');
            });
        });
    </script>
@endsection
