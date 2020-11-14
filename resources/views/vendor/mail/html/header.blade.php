<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Groupon')
<img src="{{asset('frontend/images/main-logo.png')}}" style="width: 225px !important" class="logo" alt="Groupon Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
