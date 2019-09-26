<!-- All user menu -->
<div class="single category">
    <h3 class="side-title">My Menu</h3>
    <ul class="list-unstyled">
        <li><a href="" title="">My Profile</a></li>
        <li><a href="" title="">Submit Ticket</a></li>
        <li><a href="" title="">My It Assets</a></li>
        <li><a href="" title="">Arhived Files</a></li>
    </ul>
</div>

<div class="single category">
    <h3 class="side-title">It Service Desk</h3>
    <ul class="list-unstyled">
        <li><a href="" title="">IT Organization Chart</a></li>
        <li><a href="" title="">Downloadable Form</a></li>
        <li><a href="" title="">Account Access Request</a></li>
        <li><a href="" title="">Asset Request</a></li>
        <li><a href="" title="">FAQt</a></li>
    </ul>
</div>

{{-- Admin menu --}}
@role('Super Admin|Admin')
<div class="single category">
    <h3 class="side-title">Administrative</h3>
    <ul class="list-unstyled">
        <li><a class="{{ (Route::is('user*') || Route::is('role*') || Route::is('permission*') || Route::is('hod*')) ? 'active' : '' }}" href="{{ route('user-list') }}" title="User Management">User Management</a></li>
        <li><a class="{{ (Route::is('asset*')) ? 'active' : '' }}" href="{{ route('asset-list') }}" title="IT Assets">Man IT Assets</a></li>
        <li><a href="" title="">Man Account Access Request</a></li>
        <li><a href="" title="">Man Incident</a></li>
        <li><a href="" title="">Man IT Requisition</a></li>
    </ul>
</div>
@endrole

{{-- HR Menu --}}
<div class="single category">
    <h3 class="side-title">HR Dept.</h3>
    <ul class="list-unstyled">
        <li><a href="" title="">Blog Post</a></li>
        <li><a href="" title="">Upload Memo / Announcement</a></li>
    </ul>
</div>
