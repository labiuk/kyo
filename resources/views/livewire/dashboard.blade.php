<div>
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Today's Money</p>
                                <h5 class="mb-0 font-bold">
                                    $53,000
                                    <span class="leading-normal text-size-sm font-weight-bolder text-lime-500">+55%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                <i class="ni ni-money-coins text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Today's Users
                                </p>
                                <h5 class="mb-0 font-bold">
                                    2,300
                                    <span class="leading-normal text-size-sm font-weight-bolder text-lime-500">+3%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                <i class="ni ni-world text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">New Clients</p>
                                <h5 class="mb-0 font-bold">
                                    +3,462
                                    <span class="leading-normal text-red-600 text-size-sm font-weight-bolder">-2%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                <i class="ni ni-paper-diploma text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Sales</p>
                                <h5 class="mb-0 font-bold">
                                    $103,430
                                    <span class="leading-normal text-size-sm font-weight-bolder text-lime-500">+5%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                <i class="ni ni-cart text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form>
        @if(count($user_images) > 0)
            <ul class="flex-auto p-4">
                @foreach($user_images as $my_img)
                <li wire:key="{{$loop->index}}" class="rounded-lg w-1/5">
                    <input type="checkbox" class="hidden" />
                    <a href="{{ asset($my_img->file_name) }}" download><img src="{{ asset($my_img->file_name) }}" class="w-full" /><a>
                    @if($role == "admin")
                    <button wire:click.prevent="remove({{$loop->index}})" id="edit" class="custom-btn btn-12"><span>Remove</span><span>Edit</span></button>
                    @endif
                </li>
                @endforeach
            </ul>
        @else <h2>You don't have uploaded images</h2>
        @endif
        <form>
</div>
<div class="flex-auto p-4">
    <ul>
    @if(count($images) > 0)
        @foreach($images as $img)
        <li wire:key="{{$loop->index}}" class="rounded-lg w-1/5">
            @if($role == "admin")
            <button  id="edit" class="custom-btn btn-12"><span>Remove</span><span>Edit</span></button>
            @endif
            <input type="checkbox" class="hidden" />
            <a href="{{ asset($img->file_name) }}" download><img src="{{ asset($img->file_name) }}" class="w-full" /></a>
        </li>
        @endforeach
        @else <h2>There is no Images</h2>
        @endif
    </ul>
</div>
    </div>