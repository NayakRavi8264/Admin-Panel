<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>

                <ul class="nav side-menu">
                  <li><a href="/dashboard"><i class="fa fa-home"></i> Home</span></a>
                 </li>
               </ul>
                 <ul class="nav side-menu">
                  <li><a><i class="fa fa-pie-chart"></i> Products <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('productcategory.index')}}">Product Category</a></li>
                      <li><a href="{{route('product.index')}}">Product</a></li>
                      <li><a href="{{route('productimage.index')}}">Product Images</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-paypal"></i> Payment and Customer <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('customerdetail.index')}}">Customer Details</a></li>
                      <li><a href="{{route('payment.index')}}">Payment</a></li>
                     <!--  <li><a href="{{route('productimage.index')}}">Product Images</a></li> -->
                    </ul>
                  </li>
                    
                     <li><a><i class="fa fa-address-card"></i> Contact <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('contact.index')}}">Company Contact</a></li>
                     
                      

                </ul>
              </li>
            </ul>
              </div>
              

            </div>