@component('mail::message')
# your post was liked

{{ $liker->name }} liked one of your posts

The body of your message.

@component('mail::button', ['url' =>route('posts.show', $post)])
    view post
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
