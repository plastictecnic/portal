<!-- All user menu -->
<div class="single category">
    <h3 class="side-title">My Menu</h3>
    <ul class="list-unstyled">
        <li><a href="" title="">My Profile</a></li>
        <li><a href="" title="">Submit Ticket</a></li>
        <li><a href="" title="">My It Assets</a></li>
    </ul>
</div>

<div class="single category">
    <h3 class="side-title">It Service Desk</h3>
    <ul class="list-unstyled">
        <li><a href="" title="">IT Organization Chart</a></li>
        <li><a href="" title="">Form</a></li>
        <li><a href="" title="">AAR (Hard Copy)</a></li>
        <li><a href="" title="">Asset Request</a></li>
    </ul>
</div>

{{-- Admin menu --}}
@role('Super Admin')
<div class="single category">
    <h3 class="side-title">Administrative</h3>
    <ul class="list-unstyled">
        <li><a class="{{ (Route::is('user*') || Route::is('role*') || Route::is('permission*')) ? 'active' : '' }}" href="{{ route('user-list') }}" title="User Management">User Management</a></li>
    </ul>
</div>
@endrole
