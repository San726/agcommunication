@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
{{--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">--}}
    {{--Launch demo modal--}}
{{--</button>--}}

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Welcome to AG Communication</h4>
            </div>
            <div class="modal-body">
                <h1 style="color: red; line-height: 50px;">
                    প্রিয় গ্রাহক, আপনাদের অবগিতির জন্য জানানো যাচ্ছে যে, আমাদের বিলিং সিস্টেমটি সম্পূর্ণ সফ্টওয়্যারের মাধ্যমে সম্পন্ন করা হচ্ছে। তাই, প্রতি
                    মাসের ১০ তারিখের মধ্যে বিল পরিশোধ করার জন্য বিনীতভাবে অনুরোধ করা হচ্ছে। উল্লেখ্য যে, অপরিশোধিত এবং বকেয়া বিলের লাইনসমূহ
                    স্বয়ংক্রিয়ভাবে বিচ্ছিন্ন হয়ে যাবে।  তাই,  আপনাদের সকলের প্রতি  বিনীতভাবে অনুরোধ করা হচ্ছে যে, প্রতি মাসের ১০ তারিখের পূর্বেই আপনার
                    বিল পরিশোধ করুন এবং নিরবিচ্ছিন ইন্টারনেট  সংযোগ উপভোগ করুন, ধন্যবাদ।
                </h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>

    $( document ).ready(function() {
        $("#myModal").modal();
    });

</script>
@endsection
