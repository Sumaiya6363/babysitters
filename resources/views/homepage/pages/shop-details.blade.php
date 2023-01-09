@extends('homepage.layouts.app')
@section('title','Shops Details')
@section('content')
    <section class="header-inner bg-dark text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
                <h2 class="inner-banner-title">Shop Details</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="space-ptb shop-single">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div class="slider-slick">
                     <div class="slider slider-for detail-big-car-gallery">
                           <img src="{{asset('images/')}}/{{$product->image}}" alt="produt">
                           
                       </div>
                       {{-- <div class="slider slider-nav mt-2">
                           <img src="{{asset('images/')}}/{{$product->image}}" alt="product">
                          
                       </div> --}}
                    </div>
                 </div>
                <div class="col-md-7">
                  <div class="product-detail">
                    <h4>{{$product->name}}</h4>
                    
                    <div class="product-price-rating">
                      {{-- <div class="product-rating d-flex">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                      <a href="#reviews" class="text-dark ms-2" rel="nofollow">(<span class="count">4</span> customer reviews)</a>
                      </div> --}}
                      <div class="product-price">
                        @if ($product->price_active == 1 )
                        <h4 class="p-0"><span> {{$product->price}}৳</span></h4>
                       @endif
                       @if ($product->price_active == 2)
                       <h4 class="p-0"><del>{{$product->price}}৳</del><span>{{$product->discount_price}}৳</span></h4>
                       @endif

                      </div>
                      <span class="d-block pb-4">Category: <a href="javascript:void(0)"> {{$product->category ? $product->category->name : ''}}</a>  </span>
                    
                    </div>
                    
                    <div class="input-group">
                    
                  </div>
                    <a class="btn btn-primary btn-md add_to_cart" data-id="{{$product->id}}" href="javascropt:void(0)"><i class="fas fa-shopping-cart"></i> Add To Cart </a>
                    <a class="btn btn-secondary btn-md add_to_cart" data-id="{{$product->id}}" href="{{route('cart.page')}}"><i class="fas fa-shopping-cart"></i> Order Now </a>
                    {{-- <div class="product-summary">
                      <a class="" href="#"><i class="far fa-heart"></i>Add to Wishlist</a>
                      <a class="" href="#"><i class="fa fa-compress-alt" aria-hidden="true"></i>Compare</a>
                    </div> --}}
                    <hr>
                    <div class="product-detail-meta">
                      
                      
                   </div>
                      <div class="product-detail-social">
                        <span>Share :</span>
                        <ul>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="co-8 col-md-12 py-4">
              <p>
                {{$product->description}}
            </p>
            </div>
          </div>
  
        <div class="row mt-5">
            <div class="col-lg-12">

              <div class="tab-content mt-5" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">

                  <div class="row mt-4">
                    <div class="col-md-4">
                      <div class="feature-info left-icon mb-5 mb-md-0">
                        <div class="feature-info-icon">
                          <i class="flaticon-truck"></i>
                        </div>
                        <div class="feature-info-content">
                          <h5 class="feature-info-title">Free shipping</h5>
                          <p>Free Shipping on orders $199.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="feature-info left-icon mb-5 mb-md-0">
                        <div class="feature-info-icon">
                          <i class="flaticon-conversation"></i>
                        </div>
                        <div class="feature-info-content">
                          <h5 class="feature-info-title">24/7 Support</h5>
                          <p>Online and phone support 24 / 7</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="feature-info left-icon mb-0">
                        <div class="feature-info-icon">
                          <i class="flaticon-reload"></i>
                        </div>
                        <div class="feature-info-content">
                          <h5 class="feature-info-title">30 Days return</h5>
                          <p>30 days money-back guarantee.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="tab-reviews">
                  <div class="row">
                    <div class="col-12">
                      <h5 class="mb-4">4 Reviews for women’s fabric mix midi wrap jumpsuit</h5>
                      <div class="commentlist">
                        <div class="comment-author">
                          <img src="images/service/service-logo.png" alt="">
                        </div>
                        <div class="comment-content">
                          <div class="reviews">
                            <p class="meta">
                              <strong>Sara Lisbon </strong>(verified owner) – November 8, 2020
                            </p>
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                              <i class="far fa-star"></i>
                            </div>
                          </div>
                          <p>For those of you who are serious about having more, doing more, giving more and being more, success is achievable with some understanding of what to do, some discipline around planning and execution of those plans and belief that you can achieve your desires.</p>
                        </div>
                      </div>
                      <div class="commentlist">
                        <div class="comment-author">
                          <img src="images/service/service-logo.png" alt="">
                        </div>
                        <div class="comment-content">
                          <div class="reviews">
                            <p class="meta">
                              <strong>Frank Smith </strong>(verified owner) – November 8, 2020
                            </p>
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                              <i class="far fa-star"></i>
                            </div>
                          </div>
                          <p>There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight. One thing for certain though, is that irrespective of the number of steps the experts talk about, they all originate from the same roots.</p>
                        </div>
                      </div>
                      <div class="commentlist">
                        <div class="comment-author">
                          <img src="images/service/service-logo.png" alt="">
                        </div>
                        <div class="comment-content">
                          <div class="reviews">
                            <p class="meta">
                              <strong>Joanna williams </strong>(verified owner) – November 8, 2020
                            </p>
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                              <i class="far fa-star"></i>
                            </div>
                          </div>
                          <p>Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually want and need success to be hard! Why? So they then have a built-in excuse when things don’t go their way! Pretty sad situation, to say the least.</p>
                        </div>
                      </div>
                      <div class="commentlist">
                        <div class="comment-author">
                          <img src="images/service/service-logo.png" alt="">
                        </div>
                        <div class="comment-content">
                          <div class="reviews">
                            <p class="meta">
                              <strong>Felica Queen </strong>(verified owner) – November 8, 2020
                            </p>
                            <div class="rating">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star-half-alt"></i>
                              <i class="far fa-star"></i>
                            </div>
                          </div>
                          <p>Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision. The first action is always in making the decision to proceed. This is a fundamental step, which most people overlook.</p>
                        </div>
                      </div>
                      <div class="mt-4 ">
                        <h5>Add a review</h5>
                        <p>Your email address will not be published. Required fields are marked *</p>
                      </div>
                      <form class="row mt-4 align-items-center">
                        <div class="mb-3 col-sm-12">
                          <label class="form-label">Name*</label>
                          <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col-sm-12">
                          <label class="form-label">Email*</label>
                          <input type="email" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3 col-sm-12">
                          <label class="form-label">Your review *</label>
                          <div class="product-rating">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                          </div>
                      </div>
                        <div class="mb-3 col-sm-12">
                          <label class="form-label">Your review *</label>
                          <div class="mb-3">
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                          </div>
                        </div>
                        <div class="form-check col-sm-12">
                              <div class="custom-control form-check custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                <label class="custom-control-label form-label" for="customCheck15">Save my name, email, and website in this browser for the next time I comment.</label>
                              </div>
                        </div>
                        <div>
                          <a class="btn btn-primary btn-md mt-4" href="book-a-sitter.html"> Submit </a>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="custom" role="tabpanel" aria-labelledby="custom-tab">
                  <div class="row">
                    <div class="col-12">
                      <p>
                        <strong>The best way is to develop and follow a plan.</strong> Start with your goals in mind and then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan for, every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer to your Vision and Goals. If the plan doesn’t support the vision then change it!</p>
                      <h5>Why do we use it?</h5>
                      <p class="mb-0">It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!</p>
                      <p class="mt-2">Commitment is something that comes from understanding that everything has its price and then having the willingness to pay that price. This is important because nobody wants to put significant effort into something, only to find out after the fact that the price was too high.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@endsection


