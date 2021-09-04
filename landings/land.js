let totalLink = location.pathname;
console.log(totalLink.substring(totalLink.length - 5, totalLink.length));
if (window.innerWidth < 768) {
    if (totalLink.substring(totalLink.length - 5, totalLink.length) != '-mob/') window.location.href = totalLink.substring(0, totalLink.length - 1) + '-mob/'
} else {
    if (totalLink.substring(totalLink.length - 5, totalLink.length) == '-mob/') window.location.href = totalLink.substring(0, totalLink.length - 5)
}