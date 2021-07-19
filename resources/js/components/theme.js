export const toDarkMode = () => {
    localStorage.theme = 'dark';
    document.documentElement.classList.add('dark');
}

export const toLightMode = () => {
    localStorage.theme = 'light';
    document.documentElement.classList.remove('dark');
}
