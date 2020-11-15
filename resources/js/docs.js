import Prism from 'prismjs';
Prism.manual = true;

highlightCode();
wrapHeadingsInAnchors();
setupNavCurrentLinkHandling();
replaceBlockquotesWithCalloutsInDocs();

function highlightCode() {
    [...document.querySelectorAll('pre code')].forEach(el => {
        Prism.highlightElement(el);
    });
}

function wrapHeadingsInAnchors() {
    [...document.querySelector('.docs_main').querySelectorAll('a[name]')].forEach(anchor => {
        const heading = anchor.parentNode.nextElementSibling;
        anchor.textContent = heading.textContent;
        anchor.href = '#' + heading.id;
        anchor.removeAttribute('name');
        heading.replaceChild(anchor, heading.childNodes[0]);
    });
}

function setupNavCurrentLinkHandling() {
    const current = document.querySelector('.docs_sidebar ul').querySelector('li a[href="' + window.location.pathname + '"]');

    if (current) {
        current.parentNode.parentNode.parentNode.classList.add('sub--on');
        current.parentNode.classList.add('active');
    }

    [...document.querySelectorAll('.docs_sidebar h2')].forEach(el => {
        el.addEventListener('click', (e) => {
            e.preventDefault();

            const active = el.parentNode.classList.contains('sub--on');

            [...document.querySelectorAll('.docs_sidebar ul li')].forEach(el => el.classList.remove('sub--on'));

            if(! active) {
                el.parentNode.classList.add('sub--on');
            }
        });
    });
}

function replaceBlockquotesWithCalloutsInDocs() {
    [...document.querySelectorAll('.docs_main blockquote p')].forEach(el => {
        var str = el.outerHTML;
        var match = str.match(/\{(.*?)\}/);
        var img, color;

        if (match) {
            var type = match[1] || false;
        }

        if (type) {
            switch (type) {
                case "note":
                    img = '/img/callouts/exclamation.min.svg';
                    color = 'bg-red-600';
                    break;
                case "tip":
                    img = '/img/callouts/lightbulb.min.svg';
                    color = 'bg-purple-600';
                    break;
                case "laracasts":
                case "video":
                    img = '/img/callouts/laracast.min.svg';
                    color = 'bg-blue-600';
                    break;
            }

            const wrapper = document.createElement('div');
            wrapper.classList = 'mb-10 max-w-2xl mx-auto px-4 py-8 shadow-lg lg:flex lg:items-center';

            const imageWrapper = document.createElement('div');
            imageWrapper.classList = `w-20 h-20 mb-6 flex items-center justify-center flex-shrink-0 ${color} lg:mb-0`;
            const image = document.createElement('img');
            image.src = img;
            image.classList = `opacity-75`;
            imageWrapper.appendChild(image);
            wrapper.appendChild(imageWrapper);

            el.parentNode.insertBefore(wrapper, el);

            el.innerHTML = str.replace(/\{(.*?)\}/, '');
            el.classList = 'mb-0 lg:ml-6';
            wrapper.classList.add('callout');
            wrapper.appendChild(el);
        }
    });
}
