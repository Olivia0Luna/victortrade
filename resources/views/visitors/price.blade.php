                        
                        <div class="card slide-title">
                            
                        </div>

                        <div class="title-head-subtitle text-center">
                            <p class="lead">Instant Profits Withdrawal</p><br>
                            <p class="lead">5% Active Referral Profits On All Plans</p>
                        </div>
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                                <ul class="pricing-wrapper" style="display: flex; gap: 20px; flex-wrap: wrap;">
                                    @foreach($plans as $plan)
                                        <!-- Buy Pricing Table #1 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>{{$plan['plan_name']}}</h2>
                                            <h2>GET {{$plan['ROI']}}% USD <span>After </span>
                                                <span>{{($plan['time_rate']/ 3600)}} HOURS</span>
                                            </h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">{{$plan['initial_minimum_fee']}} - ${{$plan['initial_maximum_fee']}}</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="{{route('user.plan', $plan['id'])}}" class="btn btn-primary">INVEST NOW</a>
                                        </footer>
                                    </li>
                                    @endforeach
                                    <!-- Buy Pricing Table #1 Ends -->
                                    <!-- Sell Pricing Table #1 Starts -->
                                    <li data-type="sell" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>{{$plans[4]['plan_name']}}</h2>
                                            <h2>GET {{$plans[4]['ROI']}}% USD <span>After </span>
                                                <span>{{($plans[4]['time_rate']/ 3600)}} HOURS</span>
                                            </h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">{{$plans[4]['initial_minimum_fee']}} - ${{$plans[4]['initial_maximum_fee']}}</span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="{{route('user.plan', $plans[4]['id'])}}" class="btn btn-primary">INVEST NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Sell Pricing Table #1 Ends -->
                                </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Ends -->