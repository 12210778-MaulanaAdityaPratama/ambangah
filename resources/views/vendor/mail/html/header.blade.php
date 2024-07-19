@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('assets/img/kuburaya.ico')}}" alt="" class="img-fluid">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
