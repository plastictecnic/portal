<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>


    <style>
        @page {
            margin: 0cm 0cm;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 3cm;
            margin-left: .5cm;
            margin-right: .5cm;
            margin-bottom: 4cm;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;

            /** Extra personal styles **/
            /* background-color: white; */
            color: #060f33;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 4cm;

            /** Extra personal styles **/
            background-color: #060f33;
            color: white;
        }
        footer .page-number:after { content: counter(page); }
        .table{
            width: 100%;
            border: 0px;
            height: 3.5cm;
        }
        .table tr td p {
            margin: 0px;
            padding: 0px;
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 200;
        }
        .table tr td{
            vertical-align: middle;
            width: 33.3%;
            padding-left: .5cm;
        }
        .page-details{
            height: .5cm;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
        }
        .page-details p{
            margin: 0px;
            padding: 30px .5cm;
        }
        .hr{
            color: #03a9f4;
            border: 1px solid #03a9f4;
        }

        .table-header{
            margin-top: .5cm;
            width: 100%;
            border: 0px;
            height: 2cm;
        }
        .table-header tr {
            padding: 0px;
            margin: 0px;
        }
        .table-header tr td p {
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 200;
            font-size: 10px;
        }
        .table-header tr td h3 {
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .table-header tr td{
            vertical-align: middle;
            width: 33.3%;
            /* padding-left: .5cm; */
            padding: 0px;
            margin: 0px;
        }
        .top-line{
            color: #060f33;
            border: .5px dotted #060f33;
            width: 95%;
        }
    </style>

</head>
<body>
    <!-- Define header and footer blocks before your content -->
    <header>
        <table class="table-header">
            <tr>
                <td rowspan="2" style="padding-left: 0.5cm;"><img width="75px" src="{{ asset('images/logo.png') }}" alt="Plastictecnic (M) Sdn. Bhd."></td>
                <td style="text-align:center;">
                    <h3>Plastictecnic (M) Sdn. Bhd.</h3>
                </td>
                <td rowspan="2" style="text-align:right; padding-right: 0.5cm;">
                    <img width="75px" src="{{ asset('images/iso.png') }}" alt="Plastictecnic (M) Sdn. Bhd.">
                </td>
            </tr>
            <tr>
                <td style="text-align:center;">
                    <p>197601004542 (30481-V)</p>
                </td>
            </tr>
        </table>
        <hr class="top-line">
    </header>

    <footer>
        <table class="table">
            <tr>
                <td>
                    <p style="height:30px;">&nbsp;</p>
                    <p>Lot 1 Jalan P/2A
                    <p>Kawasan Persusahaan PKT 1</p>
                    <p>43650 Bandar Baru Bangi</p>
                    <p>Selangor Darul Ehsan, Malaysia</p>
                </td>
                <td>
                    <p style="height:30px;">&nbsp;</p>
                    <p>Lot 1804 Jalan Lengkok Emas</p>
                    <p>Kawasan Perindustrian Nilai</p>
                    <p>71800 Nilai</p>
                    <p>Negri Sembilan, Malaysia</p>
                </td>
                <td rowspan="2">
                    <p>Tel: +6 03-8925 6950 | Fax: +6 03-8925 6955</p>
                    <hr class="hr">
                    {{-- <p>&nbsp;</p> --}}
                    <p>Tel: +6 06-799 0010 | Fax: +6 06-799 0016</p>
                    <hr class="hr">
                    <p>sales@tecnic.com.my</p>
                    <hr class="hr">
                    <p><a style="text-decoration:none; color:#03a9f4;" href="https://plastictecnic.com">Plastictecnic (M) Sdn. Bhd.</a></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Printed @ {{ \Carbon\Carbon::now()->format('d-M-Y H:i:s') }}</p>
                </td>
                <td>
                    <p class="page-number">Page : </p>
                </td>
            </tr>
        </table>
    </footer>

    <!-- Wrap the content of your PDF inside a main tag -->
    <main>
        @yield('content')
    </main>
</body>
</html>
