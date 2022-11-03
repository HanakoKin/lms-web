@section('script1')
<script type="text/javascript">
    $(document).ready(function() {
            $('#datatable').DataTable();
        });

        function editadmin(id) {

            console.log(id);

            $.ajax({
                url: "{{ url('dashboard/admin/detailedit') }}" + "/" + id,
                dataType: "json",
                success: function(status) {
                    $('#editidadmin').val(status.id);
                    $('#editnameadmin').val(status.name);
                    $('#editusernameadmin').val(status.username);
                    $('#editgenderadmin').val(status.jenis_kelamin);
                    $('#editaddressadmin').val(status.alamat);
                    $('#editemailadmin').val(status.email);
                },
            });
        }
</script>
@endsection
