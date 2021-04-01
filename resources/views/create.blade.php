<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
    </head>
    <body>
        <h1>Blog Name</h1>
                <form action="/posts" method="POST">
                     @csrf
                    <div class="title">
                        <h2>title</h2>
                        <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/><br>
                        <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                    <div class="body">
                        <h2>Body</h2>
                        <textarea name="post[body]" placeholder="ざるそば">{{ old('post.body') }}</textarea>
                        <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                     </div>
                     <input type="submit" value="保存"/>
                </form>
             </div>
            <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
