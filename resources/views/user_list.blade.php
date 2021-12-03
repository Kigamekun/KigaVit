<x-app-layout>
    <style>
        body {
            background: #f1e2dd;
        }

    </style>
    <br>
    <center>
        <h1><b>User</h1></b>
    </center>

    <br>
    <div style="background: white;border-radius:10px;padding: 20px" class="container">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>

                    <th>Role</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $usr)

                    <tr>
                        <td>{{ $usr->name }}</td>
                        <td>
                            @if (is_null($usr->email_verified_at))
                                Not Verified
                            @else
                                Verified
                            @endif
                        </td>

                        <td>
                            <center>
                                @if ($usr->role == 1)
                                    <button class="btn btn-success">Admin</button>
                                @else
                                    <button class="btn btn-info">User</button>
                                @endif
                            </center>
                        </td>
                        <td>{{ $usr->email }}</td>
                    </tr>

                @endforeach

                </tfoot>
        </table>



    </div>
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#e7008a" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</x-app-layout>
