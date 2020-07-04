const birthday = new Date(2000, 2, 14);
const diffDays = Math.ceil(Math.abs(new Date() - birthday) / (1000 * 60 * 60 * 24));
var diffYears = Math.floor(diffDays/365);