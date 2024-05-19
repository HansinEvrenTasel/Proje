const apiKey = '3eee4a67eee7c661912454fa6d16d9b2';
const movieIds = [157336, 423, 550, 18491];

async function getMovieDetails(id) 
{
    const apiUrl = `https://api.themoviedb.org/3/movie/${id}?api_key=${apiKey}&language=tr-TR`;
    const response = await fetch(apiUrl);
    const data = await response.json();
    return data;
}

async function displaySelectedMovies() 
{
    const moviesContainer = document.getElementById('movies');
    moviesContainer.innerHTML = '';

    for (const id of movieIds) 
    {
        const movie = await getMovieDetails(id);
        const movieElement = document.createElement('div');
        movieElement.classList.add('movie');

        movieElement.innerHTML = `
            <h2>${movie.title}</h2>
            <img src="https://image.tmdb.org/t/p/w500${movie.poster_path}" alt="${movie.title}">
            <p>Çıkış Tarihi: ${movie.release_date}</p>
            <p>Ortalama Puan: ${movie.vote_average}</p>
            <p>${movie.overview}</p>
        `;

        moviesContainer.appendChild(movieElement);
    }
}

displaySelectedMovies();