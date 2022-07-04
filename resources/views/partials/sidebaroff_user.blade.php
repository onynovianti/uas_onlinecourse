<!-- Menu start -->
<div class="off-canvas-active">
    <a class="off-canvas-close"><i class="las la-times"></i></a>
    <div class="off-canvas-wrap">
        <div class="menu-wrap">
            <div id="menu" class="slinky-mobile-menu text-left">
                <ul>
                    <li>
                        <a href="/user">HOME</a>
                    </li>
                    <li>
                        <a href="/myaccount">MY ACCOUNT</a>
                    </li>
                    <li>
                        <a href="/wishlist">WISHLIST</a>
                    </li>
                    <li>
                        <a href="/mycourse">MY COURSES</a>
                    </li>
                    <li>
                        <a href="/explorecourse">EXPLORE COURSES</a>
                    </li>
                    <li>
                        <a href="/contactus">CONTACT US</a>
                    </li>
                    <form id="logout" action="/logout" method="post"> @csrf
                        <li onclick="logout.submit();"><a>LOGOUT</a>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>