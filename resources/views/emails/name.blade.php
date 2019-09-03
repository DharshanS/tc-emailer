<div>
    Name : {{ $templateInfo['name'] }}
    Email : {{ $templateInfo['email'] }}
    Mobile : {{ $templateInfo['mobile'] }}
    Mode : {{ $templateInfo['mode'] }}
    Special Request : {{ $templateInfo['specialRequest'] }}
    NoOfRooms : {{json_encode($templateInfo['noOfRooms'],true)}}
    CallbackTime : {{$templateInfo['callbackTime']}}
</div>
