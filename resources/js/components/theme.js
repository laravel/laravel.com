export const toDarkMode = () => {
    localStorage.theme = 'dark';
    window.updateTheme();
}

export const toLightMode = () => {
    localStorage.theme = 'light';
    window.updateTheme();
}

export const toSystemMode = () => {
    localStorage.theme = 'system';
    window.updateTheme();
}
