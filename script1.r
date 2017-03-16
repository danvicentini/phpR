# my_rscript.R

args = commandArgs(TRUE)

#N = args[1]
#x = rnorm(N,0,1)
riqueza <- c(15,18,22,24,25,30,31,34,37,39,41,45)
area <- c(2,4.5,6,10,30,34,50,56,60,77.5,80,85)
area.cate <- rep(c("pequeno", "grande"), each=6)


png(filename="temp.png", width=500, height=500)
plot(riqueza~area)
plot(area,riqueza) # o mesmo que o anterior
boxplot(riqueza~area.cate)
barplot(riqueza)

#hist(x, col="lightblue")
dev.off()