const links = document.querySelectorAll('a.link')

links.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault(); // Essa parte evita o carregamento imediato
        document.body.classList.add('opacity-0')
        setTimeout(() => {
            window.location.href = link.href
        }, 2000)
    })
})

window.addEventListener('DOMContentLoaded', () => {
    document.body.classList.remove('opacity-0')
})