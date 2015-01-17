#!/bin/sh

# optimizes images based on their image size

IMGSIZEMAX=$(( 500*500 ))
IMGDIM="500x500"

OUTDIR="convimg"
mkdir -p $OUTDIR

if [[ $1 == "-h" || $1 == "--help" ]]; then
	cat << HEREDOC
  USEAGE: optimg.sh [OPTIONS] "[FILES]"

  optimg.sh is an image optimization script that checks each file in the current
  directory (recursively) or the given list of files and optimizes them if
  needed. Each optimized image is sent to the "convimg/" directory that is
  located in the directory the script is run. An output log is sent to stdout by
  default.

  OPTIONS:
    -h --help  display this help messgae

  FILES:
    Files that you wish to optimize. If you want to optimize more than one
    file then you need to wrap the list in quotes. If no list of files is given
    then all of the files in the current directory (recursively) are used.
    
  Examples: 
      Optimizes one image called img.png

        ./optimg.sh img.png

      Optimizes multiple images \(note the quotations around the list)

      ./optimg.sh "img1.png img2.jpg img3.gif ..."

  DEPENDENCIES:
    * ImageMagick 

  AUTHOR:
    Noah Harvey

  VERSION: 1.0
HEREDOC
exit 
fi

# get the images to use (by default use all images in current directory
# recursively. Ignore directories, hidden files, and anything in the output
# directory
images=$(find -type f | grep -v $OUTDIR"/")

if [[ -n $1 ]]; then
	images=$1	
fi

function imgDim
{
	identify -format $2 -size $2 $1
}

for img in $images 
do

	imgwidth=$(imgDim $img "%w")
	imgheight=$(imgDim $img "%h")

	if [[ -z $imgwidth || -z $imgheight ]]; then
		echo "$img : could not determine image size...skipping image"
		continue
	fi

	imgsize=$(( $imgwidth*$imgheight ))

	if [[ $(( $imgsize <= $IMGSIZEMAX )) == 1 ]]; then
		echo "$img : image doesn't need to be converted...skipping image"
		continue
	fi

	#make the subdirectories if they don't exist in the output directory
	#for the image
	dir=$OUTDIR"/"$(dirname $img)
	if [[ ! -d $dir ]]; then
		mkdir -p $dir
	fi
	
	convert $img -adaptive-resize $IMGDIM $OUTDIR/$img
	echo "$img : image converted -- "$imgwidth"x"$imgheight

done
