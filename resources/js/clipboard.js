import ClipboardJS from 'clipboard/dist/clipboard';

// These icons must be inline to avoid rendering bugs.
const clipboardIcon = `<svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path><path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path></svg>`;
const clipboardCopiedIcon = `<svg fill="currentColor" class="fill-current text-white h-5 w-5" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>`;

// Copy to Clipboard.
let codeBlocks = document.querySelectorAll('#main-content pre');

codeBlocks.forEach((element, key) => {
    // Add wrapper to code block.
    var wrapper = document.createElement('div');

    ['relative', 'code-block-wrapper'].forEach((value) => {
        wrapper.classList.add(value);
    });

    element.parentNode.insertBefore(wrapper, element);

    wrapper.appendChild(element);

    // Copy to clipboard button.
    let copyToClipboardBtn = document.createElement('button');

    copyToClipboardBtn.innerHTML = clipboardIcon;
    copyToClipboardBtn.id = `clipButton-${key}`;

    ['md:block', 'hidden'].forEach((value) => {
        copyToClipboardBtn.classList.add(value);
    });

    copyToClipboardBtn.setAttribute('aria-label', 'Copy to Clipboard');
    copyToClipboardBtn.setAttribute('title', 'Copy to Clipboard');
    copyToClipboardBtn.classList.add('copyBtn');

    wrapper.appendChild(copyToClipboardBtn);

    let copyToClipboard = new ClipboardJS(`#${copyToClipboardBtn.id}`);

    copyToClipboard.on('success', (element) => {
        copyToClipboardBtn.innerHTML = clipboardCopiedIcon;
        element.clearSelection();
        setTimeout(() => {
            copyToClipboardBtn.innerHTML = clipboardIcon;
        }, 1500);
    });

    // Code Element.
    let codeElement = element.querySelector('code');

    codeElement.id = `clipText-${key}`;
    copyToClipboardBtn.dataset.clipboardTarget = `#${codeElement.id}`;
});
