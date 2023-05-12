<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <div class="form-group">
        <label>Recipe Name</label>
        <input type="text" name="recipe_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Recipe Description</label>
        <textarea name="recipe_description" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label>Ingredients</label>
        <textarea name="recipe_ingredients" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label>Cuisine</label>
        <input type="text" name="cuisine" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
