@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Price List</div>
                <div class="card-body ml-5">
                    <h4>Insert Items</h4>
                    <p class="msg bg-success"> {{ session('msg') }} </p>
                    <form action="/item" method="POST">
                    @csrf
                    <div class="form-row">
                    
                        <div class="col-4">
                        <select class="custom-select" id="item_type" name="item_type">
                            <option selected>Choose...</option>
                            <option value="MotherBoard">MotherBoard</option>
                            <option value="RAM">RAM</option>
                            <option value="Processor">Processor</option>
                            <option value="VideoCard">Video Card</option>
                            <option value="Peripherals">Peripheral</option>
                        </select>
                        </div>
                        
                        <div class="col-3"> 
                            <input type="text" name="item_name" id="item_name" placeholder="Item Name" class="form-control">
                        </div>
                        
                        <div class="col-3">
                            <input type="text" name="item_price" id="item_price" placeholder="Item Price" class="form-control">
                        </div>        

                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submitModal">
                            Submit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="submitModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger" id="submitModalLabel">Alert !</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <span class="text-dark"> Are you sure to make changes ?</span>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Submit Item</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>  
                    </div>

                    </form>

                    <br>

                    <div class="container">

                        <table class="table text-center">
                            <tr>
                                <th>Item Type</th>
                                <th>Item Name</th>
                                <th>Item Price</th>
                                <th>Remove<th>
                            </tr>
                            
                            <tr>
                            @foreach($item AS $items)
                                <td> {{ $items->item_type }} </td>
                                <td> {{ $items->item_name }} </td>
                                <td> {{ $items->item_price }}</td>
                                <td> 
                                    <form action="/item/{{ $items->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                            Delete
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="deleteModalLabel">Alert !</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <span class="text-dark"> Are you sure to make changes ?</span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Delete Item</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div> 
                                    </form>
                                </td>

                            </tr>

                             @endforeach  
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
