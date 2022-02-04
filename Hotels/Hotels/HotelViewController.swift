//
//  HotelViewController.swift
//  Hotels
//
//  Created by wsr4 on 01.02.2022.
//

import UIKit
var x = 2.5

var myIndex = 0

class HotelViewController: UIViewController {
    var images  = [UIImage]()
    //var star = UIImage(named: "star1")!
    
    let countCells = 2
    let offset:CGFloat = 2.0 // отступ
    let identifire = "HotelCollectionViewCell"
    
    
    @IBOutlet weak var collectionView: UICollectionView!
    
   
    //было let
    
        override func viewDidLoad() {
        super.viewDidLoad()
            collectionView.dataSource = self
            collectionView.delegate = self
            /*for i in 0...7{
                guard let image = UIImage(named: String(i)) else { return }
                images.append(image)
            }*/
            //star = UIImage(named: "star1") else { return }
            collectionView.register(UINib(nibName: "HotelCollectionViewCell", bundle: nil), forCellWithReuseIdentifier: identifire)
    }


}

extension HotelViewController: UICollectionViewDataSource, UICollectionViewDelegate, UICollectionViewDelegateFlowLayout {
    
    func collectionView(_ collectionView: UICollectionView, numberOfItemsInSection section: Int) -> Int {
        return hotels.images.count
        //return images.count
    }
    
    func collectionView(_ collectionView: UICollectionView, cellForItemAt indexPath: IndexPath) -> UICollectionViewCell {
        let cell = collectionView.dequeueReusableCell(withReuseIdentifier: identifire, for: indexPath) as! HotelCollectionViewCell
        //let image = images[indexPath.item]
        cell.photoView.image = hotels.images[indexPath.item]
        cell.nameOfHotel.text = hotelss[indexPath.item].name
        cell.starView.image = hotels.star
        cell.quantityOfReviews.text = String(hotelss[indexPath.item].comment.count)+" отзывов"
        cell.rating.text = String(hotelss[indexPath.item].rating)
       
        return cell
    }
    
    func collectionView(_ collectionView: UICollectionView, didSelectItemAt indexPath: IndexPath) {
        myIndex = indexPath.item
        performSegue(withIdentifier: "segue", sender: self)
    }
    
    func collectionView(_ collectionView: UICollectionView, layout collectionViewLayout: UICollectionViewLayout, sizeForItemAt indexPath: IndexPath) -> CGSize {
        let frameCV = collectionView.frame
        
        let widthCell = frameCV.width / CGFloat(countCells)
        let heighCell = widthCell
        
        let spacing = CGFloat(countCells + 1) * offset / CGFloat(countCells)
        return CGSize(width: widthCell - spacing, height: heighCell - (offset * 2))
    }

}

