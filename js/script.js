const upload = document.querySelector('#upload');
const uploadContent = document.querySelector('#upload-content');

upload.addEventListener("click", () => {
    const uploadBox = new WinBox({
        title: 'Upload',
        border: 2,
        width: '400px',
        height: '300px',
        x: 'center',
        y: 'center',
        mount: uploadContent,
        onfocus: function() {
            this.setBackground('lightgrey');
        },
        onblur: function() {
            this.setBackground('grey');
        }
    })
})

const files = document.querySelector('#files');
const fileContent = document.querySelector('#file-content');

files.addEventListener("click", () => {
    const fileBox = new WinBox({
        title: 'Files',
        border: 2,
        width: '550px',
        height: '400px',
        x: 'center',
        y: 'center',
        mount: fileContent,
        onfocus: function() {
            this.setBackground('lightgrey');
        },
        onblur: function() {
            this.setBackground('grey');
        }
    })
})

const ass = document.querySelector('#ass');
const assContent = document.querySelector('#ass-content');

ass.addEventListener("click", () => {
    const assBox = new WinBox({
        title: 'Assignment',
        border: 2,
        width: '650px',
        height: '400px',
        mount: assContent,
        onfocus: function() {
            this.setBackground('lightgrey');
        },
        onblur: function() {
            this.setBackground('grey');
        }
    })
})

const quiz = document.querySelector('#quiz');
const quizContent = document.querySelector('#quiz-content');

quiz.addEventListener("click", () => {
    const quizBox = new WinBox({
        title: 'Quiz',
        border: 2,
        width: '650px',
        height: '400px',
        x: 'left',
        y: 'bottom',
        mount: quizContent,
        onfocus: function() {
            this.setBackground('lightgrey');
        },
        onblur: function() {
            this.setBackground('grey');
        }
    })
})

const lab = document.querySelector('#lab');
const labContent = document.querySelector('#lab-content');

lab.addEventListener("click", () => {
    const labBox = new WinBox({
        title: 'Lab',
        border: 2,
        width: '650px',
        height: '400px',
        x: 'right',
        y: 'top',
        mount: labContent,
        onfocus: function() {
            this.setBackground('lightgrey');
        },
        onblur: function() {
            this.setBackground('grey');
        }
    })
})

const exam = document.querySelector('#exam');
const examContent = document.querySelector('#exam-content');

exam.addEventListener("click", () => {
    const examBox = new WinBox({
        title: 'Exam',
        border: 2,
        width: '650px',
        height: '400px',
        x: 'right',
        y: 'bottom',
        mount: examContent,
        onfocus: function() {
            this.setBackground('lightgrey');
        },
        onblur: function() {
            this.setBackground('grey');
        }
    })
})


const proj= document.querySelector('#proj');
const projContent = document.querySelector('#proj-content');

proj.addEventListener("click", () => {
    const projBox = new WinBox({
        title: 'Project',
        border: 2,
        width: '650px',
        height: '400px',
        x: 'center',
        y: 'top',
        mount: projContent,
        onfocus: function() {
            this.setBackground('lightgrey');
        },
        onblur: function() {
            this.setBackground('grey');
        }
    })
})


const archive= document.querySelector('#archive');
const archiveContent = document.querySelector('#archive-content');

archive.addEventListener("click", () => {
    const archiveBox = new WinBox({
        title: 'Archive',
        border: 2,
        width: '650px',
        height: '400px',
        x: 'center',
        y: 'bottom',
        mount: archiveContent,
        onfocus: function() {
            this.setBackground('lightgrey');
        },
        onblur: function() {
            this.setBackground('grey');
        }
    })
})


const web = document.querySelector('#web');
const webContent = document.querySelector('#web-content');

web.addEventListener("click", () => {
    const webBox = new WinBox({
        title: 'Website',
        border: 2,
        width: '50%',
        height: '80%',
        x: 'center', 
        y: 'center',

        url: "https://jemcv.github.io/web",
        onfocus: function() {
            this.setBackground('lightgrey');
        },
        onblur: function() {
            this.setBackground('grey');
        }
    })
})