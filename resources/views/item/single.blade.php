@extends('app')

@section('title', 'Listing')

@section('content')

    @include('parts.model')

    <div class="single-item">
        <span>Title : </span> <span> {{ $item->title }}</span>
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{ $item->thumbnail }}" alt="{{ $item->title }}">
            </div>

            <div class="col-md-4">

                <p>{{ $item->description }}</p>
                <p><strong>Min Price: {{ $item->min_price }}</strong></p>
                <p><strong>Current Highest Bid: {{ $item->highest_bid }}</strong></p>

                <form method="post" id="bidding">
                    <input type="text" class="bid" name="bid" required>
                    <input type="hidden" name="item_id" class="item_id" value="{{ $item->id }}">
                    {{--TODO: replace hardcoded user id--}}
                    <input type="submit" class="submit-bid" value="Bid">
                </form>
                <p><strong>Expires in</strong></p>
                <div class="countdown-timer" style="color: darkblue; font-style: oblique"></div>
            </div>
        </div>
        <div class="row">
            <h3>Bidding history</h3>
        </div>
        <div class="row">
            <table>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Bid</th>
                            <th scope="col">User</th>
                            <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($item->bids as $k => $bid)
                            <tr>
                                <th scope="row">{{ $k }}</th>
                                <td>{{ $bid->bid }}</td>
                                <td>{{ \App\BL\User::init()->getByid($bid->bidder_id)['name'] }}</td>
                                <td>{{ $bid->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </table>
        </div>
    </div>
@endsection