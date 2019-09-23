@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">Create New Asset</div>
            <div class="col-md-6 text-right">
                <a href="{{route('asset-list')}}" class="btn btn-outline-danger btn-sm" title="User List">
                    <i class="fa fa-list-ul" aria-hidden="true"></i> Back to asset list
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        {{-- Status message --}}
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('alert'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('alert') }}
                    </div>
                @endif


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                {{-- Form Create User --}}
                <form action="{{ route('asset.store') }}" method="post" class="needs-validation set-font-size" enctype="multipart/form-data">
                    @csrf

                    <div class="bg-secondary text-white mb-4 pt-1 pb-1 pl-2">Personal Computer</div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-desktop"></i>
                                        </span>
                                    </div>

                                    <select name="type" class="custom-select @error('type') is-invalid @enderror" required>
                                        <option value="">Computer Type</option>
                                        <option value="Desktop">Desktop</option>
                                        <option value="Laptop">Laptop</option>
                                    </select>

                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-address-card-o"></i>
                                        </span>
                                    </div>
                                    <input required id="computer_name" name="computer_name" value="{{ old('computer_name') }}" placeholder="Computer Name" class="form-control @error('computer_name') is-invalid @enderror" type="text">

                                    @error('computer_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-microchip"></i>
                                        </span>
                                    </div>

                                    <select name="brand" class="custom-select @error('brand') is-invalid @enderror" required>
                                        <option value="">Computer brand</option>
                                        <option value="Dell">Dell</option>
                                        <option value="HP">HP</option>
                                        <option value="Lenovo">Lenovo</option>
                                        <option value="Asus">Asus</option>
                                        <option value="Acer">Acer</option>
                                        <option value="Toshiba">Toshiba</option>
                                        <option value="Samsung">Samsung</option>
                                        <option value="MSI">MSI</option>
                                        <option value="Fujitsu">Fujitsu</option>
                                        <option value="LG">LG</option>
                                        <option value="Sony">Sony</option>
                                        <option value="Apple">Apple</option>
                                        <option value="Others">Others</option>
                                    </select>

                                    @error('Brand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-clone"></i>
                                        </span>
                                    </div>
                                    <input required id="model" name="model" value="{{ old('model') }}" placeholder="Model" class="form-control @error('model') is-invalid @enderror" type="text">

                                    @error('model')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-list-ol"></i>
                                        </span>
                                    </div>
                                    <input required id="mac_1" name="mac_1" value="{{ old('mac_1') }}" placeholder="00:02:02:34:72:A5" class="form-control @error('mac_1') is-invalid @enderror" type="text">

                                    @error('mac_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-list-ol"></i>
                                        </span>
                                    </div>
                                    <input id="mac_2" name="mac_2" value="{{ old('mac_2') }}" placeholder="00:02:02:34:72:A5" class="form-control @error('mac_2') is-invalid @enderror" type="text">

                                    @error('mac_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-question-circle"></i>
                                        </span>
                                    </div>
                                    <input required id="remark" name="remark" value="{{ old('remark') }}" placeholder="Remark" class="form-control @error('remark') is-invalid @enderror" type="text">

                                    @error('remark')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-barcode"></i>
                                        </span>
                                    </div>
                                    <input required id="sn" name="sn" value="{{ old('sn') }}" placeholder="Serial Number" class="form-control @error('sn') is-invalid @enderror" type="text">

                                    @error('sn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-apple"></i>
                                        </span>
                                    </div>

                                    <select name="os_version" class="custom-select @error('os_version') is-invalid @enderror" required>
                                        <option value="">Operating System</option>
                                        <option value="Windows 10 Pro">Windows 10 Pro</option>
                                        <option value="Windows 10 Pro Education">Windows 10 Pro Education</option>
                                        <option value="Windows 10 Enterprise">Windows 10 Enterprise</option>
                                        <option value="Windows 10 Home">Windows 10 Home</option>
                                        <option value="Windows 7 Ultimate">Windows 7 Ultimate</option>
                                        <option value="Windows 7 Professional">Windows 7 Professional</option>
                                        <option value="Windows 7 Home Premium">Windows 7 Home Premium</option>
                                        <option value="Windows 7 Home">Windows 7 Home</option>
                                        <option value="Windows 7 Home Basic">Windows 7 Home Basic</option>
                                        <option value="Windows XP Pro">Windows XP Pro</option>
                                        <option value="Windows XP Home">Windows XP Home</option>
                                        <option value="MAC Os">MAC Os</option>
                                        <option value="Others">Others</option>
                                    </select>

                                    @error('os_version')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-key"></i>
                                        </span>
                                    </div>
                                    <input id="os_key" name="os_key" value="{{ old('os_key') }}" placeholder="Licience Key" class="form-control @error('os_key') is-invalid @enderror" type="text">

                                    @error('os_key')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                    <input required id="purchase_at" name="purchase_at" autocomplete="off" value="{{ old('purchase_at') }}" placeholder="Purchase At" class="datepicker form-control @error('purchase_at') is-invalid @enderror" type="text">

                                    @error('purchase_at')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </span>
                                    </div>

                                    <select name="warranty_status" class="custom-select @error('warranty_status') is-invalid @enderror" required>
                                        <option value="">Warranty Status</option>
                                        <option value="Expired">Expired</option>
                                        <option value="On Warranty">On Warranty</option>
                                        <option value="Extended">Extended</option>
                                    </select>

                                    @error('warranty_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar-o"></i>
                                        </span>
                                    </div>
                                    <input required id="warranty_expiry" autocomplete="off" name="warranty_expiry" value="{{ old('warranty_expiry') }}" placeholder="Warranty Expiry At" class="datepicker form-control @error('warranty_expiry') is-invalid @enderror" type="text">

                                    @error('warranty_expiry')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-file-pdf-o"></i>
                                        </span>
                                    </div>
                                    <div class="custom-file">
                                        <input required id="pdf" name="pdf" class="custom-file-input @error('pdf') is-invalid @enderror" type="file">
                                        <label class="custom-file-label" for="customFile">Choose PDF file</label>
                                    </div>

                                    @error('pdf')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="bg-secondary text-white mb-3 pt-1 pb-1 pl-2">Softwre Installed</div>
                    <div class="control-group after-add-more mb-3">
                        <div class="row no-gutters mb-3">

                            <div class="col-md-11">

                                <input style="width:110px" name="name[]" placeholder="Name" class="mr-1" type="text">

                                <input style="width:100px" name="version[]" placeholder="Version" class="mr-1" type="text">

                                <input style="width:130px" name="licience[]" placeholder="Licience" class="mr-1" type="text">

                                <input style="width:100px" name="expiry[]" autocomplete="off" placeholder="Expiry At" class="mr-1 datepicker" type="text">

                                <input style="width:100px" name="supplier[]" placeholder="Supplier" class="mr-1" type="text">

                                <input name="software_remark[]" placeholder="Remark" type="text">

                            </div>

                            <div class="col-md-1 text-center">
                                <button class="btn btn-outline-success btn-sm add-more" type="button"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-secondary text-white mt-3 mb-4 pt-1 pb-1 pl-2">Personal Printer Given</div>
                    <div class="row mt-4">
                        <div class="col-md-6">


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-print"></i>
                                        </span>
                                    </div>

                                    <select name="printer_brand" class="custom-select @error('printer_brand') is-invalid @enderror">
                                        <option value="">Brand</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Canon">Canon</option>
                                        <option value="Epson">Epson</option>
                                        <option value="Penasonic">Penasonic</option>
                                        <option value="Fuji Xerox">Fuji Xerox</option>
                                        <option value="HP">HP</option>
                                        <option value="Konica Minolta">Konica Minolta</option>
                                        <option value="Kyocera">Kyocera</option>
                                        <option value="Lexmark">Lexmark</option>
                                        <option value="Lanier">Lanier</option>
                                        <option value="Oki">Oki</option>
                                        <option value="Ricoh">Ricoh</option>
                                        <option value="Samsung">Samsung</option>
                                        <option value="Toshiba">Toshiba</option>
                                    </select>

                                    @error('printer_brand')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-clone"></i>
                                        </span>
                                    </div>
                                    <input id="printer_model" name="printer_model" value="{{ old('printer_model') }}" placeholder="Printer Model" class="form-control @error('printer_model') is-invalid @enderror" type="text">

                                    @error('printer_model')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-barcode"></i>
                                        </span>
                                    </div>
                                    <input id="printer_sn" name="printer_sn" value="{{ old('printer_sn') }}" placeholder="Serial Number" class="form-control @error('printer_sn') is-invalid @enderror" type="text">

                                    @error('printer_sn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-plug"></i>
                                        </span>
                                    </div>

                                    <select name="connection_type" class="custom-select @error('connection_type') is-invalid @enderror">
                                        <option value="">Connection type</option>
                                        <option value="USB">USB</option>
                                        <option value="USB+WiFi">USB+WiFi</option>
                                        <option value="USB+LAN">USB+LAN</option>
                                        <option value="USB+WiFi+LAN">USB+WiFi+LAN</option>
                                        <option value="USB+Parrellal+LAN">USB+Parrellal+LAN</option>
                                        <option value="LAN">LAN</option>
                                        <option value="Parrellal">Parrellal</option>
                                    </select>

                                    @error('connection_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-puzzle-piece"></i>
                                        </span>
                                    </div>

                                    <select name="printer_type" class="custom-select @error('printer_type') is-invalid @enderror">
                                        <option value="">Printer type</option>
                                        <option value="Laser Printer">Laser Printer</option>
                                        <option value="Solid Ink Printer">Solid Ink Printer</option>
                                        <option value="LED Printer">LED Printer</option>
                                        <option value="Business Inkjet Printer">Business Inkjet Printer</option>
                                        <option value="Home Inkjet Printer">Home Inkjet Printer</option>
                                        <option value="Multifunctional Printer">Multifunctional Printer (COPY/SCAN Machine)</option>
                                        <option value="Dot Matrix Printer">Dot Matrix Printer</option>
                                        <option value="3D Printer">3D Printer</option>
                                    </select>

                                    @error('printer_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </span>
                                    </div>
                                    <input id="printer_remark" name="printer_remark" value="{{ old('printer_remark') }}" placeholder="Remark" class="form-control @error('printer_remark') is-invalid @enderror" type="text">

                                    @error('printer_remark')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="row mt-2">
                       <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-danger btn-sm">Create Asset</button>
                       </div>
                   </div>
                </form>

                <!-- Copy Fields -->
                <div class="copy d-none">
                        <div class="control-group">
                            <div class="row no-gutters mt-2">
                                <div class="col-md-11">

                                    <input style="width:110px" name="name[]" placeholder="Name" class="mr-1" type="text">

                                    <input style="width:100px" name="version[]" placeholder="Version" class="mr-1" type="text">

                                    <input style="width:130px" name="licience[]" placeholder="Licience" class="mr-1" type="text">

                                    <input style="width:100px" name="expiry[]" autocomplete="off" placeholder="Expiry At" class="mr-1 datepicker" type="text">

                                    <input style="width:100px" name="supplier[]" placeholder="Supplier" class="mr-1" type="text">

                                    <input name="software_remark[]" placeholder="Remark" type="text">

                                </div>

                                <div class="col-md-1 text-center">
                                    <button class="btn btn-outline-danger btn-sm remove" type="button"><i class="fa fa-remove"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- End Form Create User --}}
            </div>


        </div>

    </div>
</div>
@endsection

@section('custom-js')
<script type="text/javascript">


    $(document).ready(function() {


        $(".add-more").click(function(){
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });


        $("body").on("click",".remove",function(){
            $(this).parents(".control-group").remove();
        });

        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });

        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

    });


</script>
@endsection
