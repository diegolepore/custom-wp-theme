<form action="/imaginary-order" method="get">
    <label for="search"></label>

    <input type="hidden" name="cat" value="2">
    <input type="text" id="search" name="s" value="<?php the_search_query(); ?>" required>
    <button type="submit">Search 🔎</button>
</form>