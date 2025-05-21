{{-- <!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Create a New Post</h1>
    <form id="postForm">
        <input type="text" name="title" placeholder="Title" required><br><br>
        <textarea name="content" placeholder="Content" required></textarea><br><br>
        <button type="submit">Submit</button>
    </form>

    <h2>All Posts</h2>
    <div id="posts"></div>

    <script>
        const form = document.getElementById('postForm');
        const postsDiv = document.getElementById('posts');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(form);
            const data = {
                title: formData.get('title'),
                content: formData.get('content'),
            };

            const response = await fetch('/api/posts', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();
            alert('Post Created!');
            loadPosts();
        });

        async function loadPosts() {
            const res = await fetch('/api/posts');
            const posts = await res.json();
            postsDiv.innerHTML = posts.map(p =>
                `<div><h3>${p.title}</h3><p>${p.content}</p><small>${p.created_at}</small></div><hr>`
            ).join('');
        }

        loadPosts();
    </script>
</body>
</html> --}}
