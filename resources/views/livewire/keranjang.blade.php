<div class="card-body">
    <p class="mb-4 text-muted"></p>
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Berat</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($cart as $item)
                        <td>
                            <img src="{{ asset($item->garapan->photo) }}" alt="" height="40" class="me-2">
                            <p class="d-inline-block align-middle mb-0">
                                <a href=""
                                    class="d-inline-block align-middle mb-0 product-name">{{ $item->garapan->nama_tanaman }}</a>

                            </p>
                        </td>
                        <td>
                            <input class="form-control w-25" type="number"
                                wire:model.lazy="cartItems.{{ $loop->index }}.quantity"
                                wire:change="updateQuantity({{ $item->id }}, $event.target.value)"
                                value="{{ $item->quantity }}" id="example-number-input1">
                        </td>
                        <td>{{ $item->garapan->harga_per_unit }}/Kg</td>

                        <td>Rp. 10.000,00</td>
                        <td></td>
                        <td>
                            <a href="" class="text-dark"><i class="mdi mdi-close-circle-outline font-18"></i></a>
                        </td>
                    @endforeach
                </tr>

            </tbody>
        </table>
    </div>
    <div class="row justify-content-center">
        <div class="mt-4">
            <div class="row">
                <div class="col-6">
                    <a href="" class="text-primary"><i class="fas fa-long-arrow-alt-left me-1"></i> Continue
                        Shopping</a>
                </div>
                <div class="col-6 text-end">
                    <a href="ecommerce-checkout.html" class="text-primary">Checkout <i
                            class="fas fa-long-arrow-alt-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div><!--end col-->

</div><!--end row-->
