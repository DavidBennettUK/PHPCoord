<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - N hemisphere - 0°E to 6°E.
 * @internal
 */
class Extent1933
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-0.1, -0.1], [0.066666666666665, -0.1], [0.23333333333333, -0.1], [0.4, -0.1], [0.56666666666667, -0.1], [0.73333333333334, -0.1], [0.9, -0.1], [1.0666666666666, -0.1], [1.2333333333333, -0.1], [1.4, -0.1], [1.5666666666667, -0.1], [1.7333333333333, -0.1], [1.9, -0.1], [2.0666666666666, -0.1], [2.2333333333333, -0.1], [2.4, -0.1], [2.5666666666667, -0.1], [2.7333333333333, -0.1], [3.1, -0.1], [3.2666666666667, -0.1], [3.4333333333333, -0.1], [3.6, -0.1], [3.7666666666667, -0.1], [3.9333333333334, -0.1], [4.1, -0.1], [4.2666666666666, -0.1], [4.4333333333333, -0.1], [4.6, -0.1], [4.7666666666667, -0.1], [4.9333333333333, -0.1], [5.1, -0.1], [5.2666666666666, -0.1], [5.4333333333333, -0.1], [5.6, -0.1], [5.7666666666667, -0.1], [5.9333333333333, -0.1], [6.1, -0.1], [6.1, 0.06666666666672], [6.1, 0.23333333333344], [6.1, 0.40000000000011], [6.1, 0.56666666666677], [6.1, 0.73333333333343], [6.1, 0.9000000000001], [6.1, 1.0666666666667], [6.1, 1.2333333333334], [6.1, 1.4000000000001], [6.1, 1.5666666666668], [6.1, 1.7333333333334], [6.1, 1.9000000000001], [6.1, 2.0666666666667], [6.1, 2.2333333333334], [6.1, 2.4000000000001], [6.1, 2.5666666666668], [6.1, 2.7333333333335], [6.1, 2.9000000000001], [6.1, 3.0666666666667], [6.1, 3.2333333333334], [6.1, 3.4000000000001], [6.1, 3.5666666666668], [6.1, 3.7333333333335], [6.1, 3.9000000000001], [6.1, 4.0666666666667], [6.1, 4.2333333333334], [6.1, 4.4000000000001], [6.1, 4.5666666666668], [6.1, 4.7333333333335], [6.1, 4.9000000000001], [6.1, 5.0666666666667], [6.1, 5.2333333333334], [6.1, 5.4000000000001], [6.1, 5.5666666666668], [6.1, 5.7333333333335], [6.1, 5.9000000000001], [6.1, 6.0666666666667], [6.1, 6.2333333333334], [6.1, 6.4000000000001], [6.1, 6.5666666666668], [6.1, 6.7333333333335], [6.1, 6.9000000000001], [6.1, 7.0666666666667], [6.1, 7.2333333333334], [6.1, 7.4000000000001], [6.1, 7.5666666666668], [6.1, 7.7333333333334], [6.1, 7.9000000000001], [6.1, 8.0666666666667], [6.1, 8.2333333333334], [6.1, 8.4000000000001], [6.1, 8.5666666666668], [6.1, 8.7333333333334], [6.1, 8.9000000000001], [6.1, 9.0666666666667], [6.1, 9.2333333333334], [6.1, 9.4000000000001], [6.1, 9.5666666666668], [6.1, 9.7333333333334], [6.1, 9.9], [6.1, 10.066666666667], [6.1, 10.233333333333], [6.1, 10.4], [6.1, 10.566666666667], [6.1, 10.733333333333], [6.1, 10.9], [6.1, 11.066666666667], [6.1, 11.233333333333], [6.1, 11.4], [6.1, 11.566666666667], [6.1, 11.733333333333], [6.1, 11.9], [6.1, 12.066666666667], [6.1, 12.233333333333], [6.1, 12.4], [6.1, 12.566666666667], [6.1, 12.733333333333], [6.1, 12.9], [6.1, 13.066666666667], [6.1, 13.233333333333], [6.1, 13.4], [6.1, 13.566666666667], [6.1, 13.733333333333], [6.1, 13.9], [6.1, 14.066666666667], [6.1, 14.233333333333], [6.1, 14.4], [6.1, 14.566666666667], [6.1, 14.733333333333], [6.1, 14.9], [6.1, 15.066666666667], [6.1, 15.233333333333], [6.1, 15.4], [6.1, 15.566666666667], [6.1, 15.733333333333], [6.1, 15.9], [6.1, 16.066666666666], [6.1, 16.233333333333], [6.1, 16.4], [6.1, 16.566666666667], [6.1, 16.733333333333], [6.1, 16.9], [6.1, 17.066666666666], [6.1, 17.233333333333], [6.1, 17.4], [6.1, 17.566666666667], [6.1, 17.733333333333], [6.1, 17.9], [6.1, 18.066666666666], [6.1, 18.233333333333], [6.1, 18.4], [6.1, 18.566666666667], [6.1, 18.733333333333], [6.1, 18.9], [6.1, 19.066666666666], [6.1, 19.233333333333], [6.1, 19.4], [6.1, 19.566666666667], [6.1, 19.733333333333], [6.1, 19.9], [6.1, 20.066666666666], [6.1, 20.233333333333], [6.1, 20.4], [6.1, 20.566666666667], [6.1, 20.733333333333], [6.1, 20.9], [6.1, 21.066666666666], [6.1, 21.233333333333], [6.1, 21.4], [6.1, 21.566666666667], [6.1, 21.733333333333], [6.1, 21.9], [6.1, 22.066666666666], [6.1, 22.233333333333], [6.1, 22.4], [6.1, 22.566666666667], [6.1, 22.733333333333], [6.1, 22.9], [6.1, 23.066666666666], [6.1, 23.233333333333], [6.1, 23.4], [6.1, 23.566666666667], [6.1, 23.733333333333], [6.1, 23.9], [6.1, 24.066666666666], [6.1, 24.233333333333], [6.1, 24.4], [6.1, 24.566666666667], [6.1, 24.733333333333], [6.1, 24.9], [6.1, 25.066666666666], [6.1, 25.233333333333], [6.1, 25.4], [6.1, 25.566666666667], [6.1, 25.733333333333], [6.1, 25.9], [6.1, 26.066666666666], [6.1, 26.233333333333], [6.1, 26.4], [6.1, 26.566666666667], [6.1, 26.733333333333], [6.1, 26.9], [6.1, 27.066666666666], [6.1, 27.233333333333], [6.1, 27.4], [6.1, 27.566666666667], [6.1, 27.733333333333], [6.1, 27.9], [6.1, 28.066666666666], [6.1, 28.233333333333], [6.1, 28.4], [6.1, 28.566666666667], [6.1, 28.733333333333], [6.1, 28.9], [6.1, 29.066666666666], [6.1, 29.233333333333], [6.1, 29.4], [6.1, 29.566666666667], [6.1, 29.733333333333], [6.1, 29.9], [6.1, 30.066666666666], [6.1, 30.233333333333], [6.1, 30.4], [6.1, 30.566666666667], [6.1, 30.733333333333], [6.1, 30.9], [6.1, 31.066666666666], [6.1, 31.233333333333], [6.1, 31.4], [6.1, 31.566666666667], [6.1, 31.733333333333], [6.1, 31.9], [6.1, 32.066666666666], [6.1, 32.233333333333], [6.1, 32.4], [6.1, 32.566666666667], [6.1, 32.733333333333], [6.1, 32.9], [6.1, 33.066666666666], [6.1, 33.233333333333], [6.1, 33.4], [6.1, 33.566666666667], [6.1, 33.733333333333], [6.1, 33.9], [6.1, 34.066666666666], [6.1, 34.233333333333], [6.1, 34.4], [6.1, 34.566666666667], [6.1, 34.733333333333], [6.1, 34.9], [6.1, 35.066666666666], [6.1, 35.233333333333], [6.1, 35.4], [6.1, 35.566666666667], [6.1, 35.733333333333], [6.1, 35.9], [6.1, 36.066666666666], [6.1, 36.233333333333], [6.1, 36.4], [6.1, 36.566666666667], [6.1, 36.733333333333], [6.1, 36.9], [6.1, 37.066666666666], [6.1, 37.233333333333], [6.1, 37.4], [6.1, 37.566666666667], [6.1, 37.733333333333], [6.1, 37.9], [6.1, 38.066666666666], [6.1, 38.233333333333], [6.1, 38.4], [6.1, 38.566666666667], [6.1, 38.733333333333], [6.1, 38.9], [6.1, 39.066666666666], [6.1, 39.233333333333], [6.1, 39.4], [6.1, 39.566666666667], [6.1, 39.733333333333], [6.1, 39.9], [6.1, 40.066666666666], [6.1, 40.233333333333], [6.1, 40.4], [6.1, 40.566666666667], [6.1, 40.733333333333], [6.1, 40.9], [6.1, 41.066666666666], [6.1, 41.233333333333], [6.1, 41.4], [6.1, 41.566666666667], [6.1, 41.733333333333], [6.1, 42.1], [6.1, 42.266666666667], [6.1, 42.433333333333], [6.1, 42.6], [6.1, 42.766666666667], [6.1, 42.933333333334], [6.1, 43.1], [6.1, 43.266666666667], [6.1, 43.433333333333], [6.1, 43.6], [6.1, 43.766666666667], [6.1, 43.933333333334], [6.1, 44.1], [6.1, 44.266666666667], [6.1, 44.433333333333], [6.1, 44.6], [6.1, 44.766666666667], [6.1, 44.933333333334], [6.1, 45.1], [6.1, 45.266666666667], [6.1, 45.433333333333], [6.1, 45.6], [6.1, 45.766666666667], [6.1, 45.933333333334], [6.1, 46.1], [6.1, 46.266666666667], [6.1, 46.433333333333], [6.1, 46.6], [6.1, 46.766666666667], [6.1, 46.933333333334], [6.1, 47.1], [6.1, 47.266666666667], [6.1, 47.433333333333], [6.1, 47.6], [6.1, 47.766666666667], [6.1, 47.933333333334], [6.1, 48.1], [6.1, 48.266666666667], [6.1, 48.433333333334], [6.1, 48.6], [6.1, 48.766666666667], [6.1, 48.933333333334], [6.1, 49.1], [6.1, 49.266666666667], [6.1, 49.433333333334], [6.1, 49.6], [6.1, 49.766666666667], [6.1, 49.933333333334], [6.1, 50.1], [6.1, 50.266666666667], [6.1, 50.433333333334], [6.1, 50.6], [6.1, 50.766666666667], [6.1, 50.933333333334], [6.1, 51.1], [6.1, 51.266666666667], [6.1, 51.433333333334], [6.1, 51.6], [6.1, 51.766666666667], [6.1, 51.933333333334], [6.1, 52.1], [6.1, 52.266666666667], [6.1, 52.433333333334], [6.1, 52.6], [6.1, 52.766666666667], [6.1, 52.933333333334], [6.1, 53.1], [6.1, 53.266666666667], [6.1, 53.433333333334], [6.1, 53.6], [6.1, 53.766666666667], [6.1, 53.933333333334], [6.1, 54.1], [6.1, 54.266666666667], [6.1, 54.433333333334], [6.1, 54.6], [6.1, 54.766666666667], [6.1, 54.933333333334], [6.1, 55.1], [6.1, 55.266666666667], [6.1, 55.433333333334], [6.1, 55.6], [6.1, 55.766666666667], [6.1, 55.933333333334], [6.1, 56.1], [6.1, 56.266666666667], [6.1, 56.433333333334], [6.1, 56.6], [6.1, 56.766666666667], [6.1, 56.933333333334], [6.1, 57.1], [6.1, 57.266666666667], [6.1, 57.433333333334], [6.1, 57.6], [6.1, 57.766666666667], [6.1, 57.933333333334], [6.1, 58.1], [6.1, 58.266666666667], [6.1, 58.433333333334], [6.1, 58.6], [6.1, 58.766666666667], [6.1, 58.933333333334], [6.1, 59.1], [6.1, 59.266666666667], [6.1, 59.433333333334], [6.1, 59.6], [6.1, 59.766666666667], [6.1, 59.933333333334], [6.1, 60.1], [6.1, 60.266666666667], [6.1, 60.433333333334], [6.1, 60.6], [6.1, 60.766666666667], [6.1, 60.933333333334], [6.1, 61.1], [6.1, 61.266666666667], [6.1, 61.433333333334], [6.1, 61.6], [6.1, 61.766666666667], [6.1, 61.933333333334], [6.1, 62.1], [6.1, 62.266666666667], [6.1, 62.433333333334], [6.1, 62.6], [6.1, 62.766666666667], [6.1, 62.933333333334], [6.1, 63.1], [6.1, 63.266666666667], [6.1, 63.433333333334], [6.1, 63.6], [6.1, 63.766666666667], [6.1, 63.933333333334], [6.1, 64.1], [6.1, 64.266666666667], [6.1, 64.433333333334], [6.1, 64.6], [6.1, 64.766666666667], [6.1, 64.933333333333], [6.1, 65.1], [6.1, 65.266666666667], [6.1, 65.433333333334], [6.1, 65.6], [6.1, 65.766666666667], [6.1, 65.933333333333], [6.1, 66.1], [6.1, 66.266666666667], [6.1, 66.433333333334], [6.1, 66.6], [6.1, 66.766666666667], [6.1, 66.933333333333], [6.1, 67.1], [6.1, 67.266666666667], [6.1, 67.433333333334], [6.1, 67.6], [6.1, 67.766666666667], [6.1, 67.933333333333], [6.1, 68.1], [6.1, 68.266666666667], [6.1, 68.433333333334], [6.1, 68.6], [6.1, 68.766666666667], [6.1, 68.933333333333], [6.1, 69.1], [6.1, 69.266666666667], [6.1, 69.433333333334], [6.1, 69.6], [6.1, 69.766666666667], [6.1, 69.933333333333], [6.1, 70.1], [6.1, 70.266666666667], [6.1, 70.433333333334], [6.1, 70.6], [6.1, 70.766666666667], [6.1, 70.933333333333], [6.1, 71.1], [6.1, 71.266666666667], [6.1, 71.433333333334], [6.1, 71.6], [6.1, 71.766666666667], [6.1, 71.933333333333], [6.1, 72.1], [6.1, 72.266666666666], [6.1, 72.433333333333], [6.1, 72.6], [6.1, 72.766666666667], [6.1, 72.933333333333], [6.1, 73.1], [6.1, 73.266666666666], [6.1, 73.433333333333], [6.1, 73.6], [6.1, 73.766666666667], [6.1, 73.933333333333], [6.1, 74.1], [6.1, 74.266666666666], [6.1, 74.433333333333], [6.1, 74.6], [6.1, 74.766666666667], [6.1, 74.933333333333], [6.1, 75.1], [6.1, 75.266666666666], [6.1, 75.433333333333], [6.1, 75.6], [6.1, 75.766666666667], [6.1, 75.933333333333], [6.1, 76.1], [6.1, 76.266666666666], [6.1, 76.433333333333], [6.1, 76.6], [6.1, 76.766666666667], [6.1, 76.933333333333], [6.1, 77.1], [6.1, 77.266666666666], [6.1, 77.433333333333], [6.1, 77.6], [6.1, 77.766666666667], [6.1, 77.933333333333], [6.1, 78.1], [6.1, 78.266666666666], [6.1, 78.433333333333], [6.1, 78.6], [6.1, 78.766666666667], [6.1, 78.933333333333], [6.1, 79.1], [6.1, 79.266666666666], [6.1, 79.433333333333], [6.1, 79.6], [6.1, 79.766666666667], [6.1, 79.933333333333], [6.1, 80.1], [6.1, 80.266666666666], [6.1, 80.433333333333], [6.1, 80.6], [6.1, 80.766666666667], [6.1, 80.933333333333], [6.1, 81.1], [6.1, 81.266666666666], [6.1, 81.433333333333], [6.1, 81.6], [6.1, 81.766666666667], [6.1, 81.933333333333], [6.1, 82.1], [6.1, 82.266666666666], [6.1, 82.433333333333], [6.1, 82.6], [6.1, 82.766666666667], [6.1, 82.933333333333], [6.1, 83.1], [6.1, 83.266666666666], [6.1, 83.433333333333], [6.1, 83.6], [6.1, 83.766666666667], [6.1, 83.933333333333], [6.1, 84.1], [5.7666666666667, 84.1], [5.4333333333333, 84.1], [5.1, 84.1], [4.7666666666667, 84.1], [4.4333333333333, 84.1], [4.1, 84.1], [3.7666666666667, 84.1], [3.4333333333333, 84.1], [3.1, 84.1], [2.5666666666667, 84.1], [2.2333333333333, 84.1], [1.9, 84.1], [1.5666666666667, 84.1], [1.2333333333333, 84.1], [0.9, 84.1], [0.56666666666667, 84.1], [0.23333333333333, 84.1], [-0.1, 84.1], [-0.1, 83.933333333333], [-0.1, 83.766666666667], [-0.1, 83.6], [-0.1, 83.433333333333], [-0.1, 83.266666666666], [-0.1, 83.1], [-0.1, 82.933333333333], [-0.1, 82.766666666667], [-0.1, 82.6], [-0.1, 82.433333333333], [-0.1, 82.266666666666], [-0.1, 82.1], [-0.1, 81.933333333333], [-0.1, 81.766666666667], [-0.1, 81.6], [-0.1, 81.433333333333], [-0.1, 81.266666666666], [-0.1, 81.1], [-0.1, 80.933333333333], [-0.1, 80.766666666667], [-0.1, 80.6], [-0.1, 80.433333333333], [-0.1, 80.266666666666], [-0.1, 80.1], [-0.1, 79.933333333333], [-0.1, 79.766666666667], [-0.1, 79.6], [-0.1, 79.433333333333], [-0.1, 79.266666666666], [-0.1, 79.1], [-0.1, 78.933333333333], [-0.1, 78.766666666667], [-0.1, 78.6], [-0.1, 78.433333333333], [-0.1, 78.266666666666], [-0.1, 78.1], [-0.1, 77.933333333333], [-0.1, 77.766666666667], [-0.1, 77.6], [-0.1, 77.433333333333], [-0.1, 77.266666666666], [-0.1, 77.1], [-0.1, 76.933333333333], [-0.1, 76.766666666667], [-0.1, 76.6], [-0.1, 76.433333333333], [-0.1, 76.266666666666], [-0.1, 76.1], [-0.1, 75.933333333333], [-0.1, 75.766666666667], [-0.1, 75.6], [-0.1, 75.433333333333], [-0.1, 75.266666666666], [-0.1, 75.1], [-0.1, 74.933333333333], [-0.1, 74.766666666667], [-0.1, 74.6], [-0.1, 74.433333333333], [-0.1, 74.266666666666], [-0.1, 74.1], [-0.1, 73.933333333333], [-0.1, 73.766666666667], [-0.1, 73.6], [-0.1, 73.433333333333], [-0.1, 73.266666666666], [-0.1, 73.1], [-0.1, 72.933333333333], [-0.1, 72.766666666667], [-0.1, 72.6], [-0.1, 72.433333333333], [-0.1, 72.266666666666], [-0.1, 72.1], [-0.1, 71.933333333333], [-0.1, 71.766666666667], [-0.1, 71.6], [-0.1, 71.433333333333], [-0.1, 71.266666666666], [-0.1, 71.1], [-0.1, 70.933333333333], [-0.1, 70.766666666667], [-0.1, 70.6], [-0.1, 70.433333333333], [-0.1, 70.266666666666], [-0.1, 70.1], [-0.1, 69.933333333333], [-0.1, 69.766666666667], [-0.1, 69.6], [-0.1, 69.433333333333], [-0.1, 69.266666666666], [-0.1, 69.1], [-0.1, 68.933333333333], [-0.1, 68.766666666667], [-0.1, 68.6], [-0.1, 68.433333333333], [-0.1, 68.266666666666], [-0.1, 68.1], [-0.1, 67.933333333333], [-0.1, 67.766666666667], [-0.1, 67.6], [-0.1, 67.433333333333], [-0.1, 67.266666666666], [-0.1, 67.1], [-0.1, 66.933333333333], [-0.1, 66.766666666667], [-0.1, 66.6], [-0.1, 66.433333333333], [-0.1, 66.266666666666], [-0.1, 66.1], [-0.1, 65.933333333333], [-0.1, 65.766666666667], [-0.1, 65.6], [-0.1, 65.433333333333], [-0.1, 65.266666666666], [-0.1, 65.1], [-0.1, 64.933333333333], [-0.1, 64.766666666667], [-0.1, 64.6], [-0.1, 64.433333333333], [-0.1, 64.266666666666], [-0.1, 64.1], [-0.1, 63.933333333334], [-0.1, 63.766666666667], [-0.1, 63.6], [-0.1, 63.433333333334], [-0.1, 63.266666666667], [-0.1, 63.1], [-0.1, 62.933333333334], [-0.1, 62.766666666667], [-0.1, 62.6], [-0.1, 62.433333333333], [-0.1, 62.266666666667], [-0.1, 62.1], [-0.1, 61.933333333334], [-0.1, 61.766666666667], [-0.1, 61.6], [-0.1, 61.433333333333], [-0.1, 61.266666666667], [-0.1, 61.1], [-0.1, 60.933333333334], [-0.1, 60.766666666667], [-0.1, 60.6], [-0.1, 60.433333333333], [-0.1, 60.266666666667], [-0.1, 60.1], [-0.1, 59.933333333334], [-0.1, 59.766666666667], [-0.1, 59.6], [-0.1, 59.433333333333], [-0.1, 59.266666666667], [-0.1, 59.1], [-0.1, 58.933333333334], [-0.1, 58.766666666667], [-0.1, 58.6], [-0.1, 58.433333333333], [-0.1, 58.266666666667], [-0.1, 58.1], [-0.1, 57.933333333334], [-0.1, 57.766666666667], [-0.1, 57.6], [-0.1, 57.433333333333], [-0.1, 57.266666666667], [-0.1, 57.1], [-0.1, 56.933333333334], [-0.1, 56.766666666667], [-0.1, 56.6], [-0.1, 56.433333333333], [-0.1, 56.266666666667], [-0.1, 56.1], [-0.1, 55.933333333334], [-0.1, 55.766666666667], [-0.1, 55.6], [-0.1, 55.433333333333], [-0.1, 55.266666666667], [-0.1, 55.1], [-0.1, 54.933333333334], [-0.1, 54.766666666667], [-0.1, 54.6], [-0.1, 54.433333333333], [-0.1, 54.266666666667], [-0.1, 54.1], [-0.1, 53.933333333334], [-0.1, 53.766666666667], [-0.1, 53.6], [-0.1, 53.433333333333], [-0.1, 53.266666666667], [-0.1, 53.1], [-0.1, 52.933333333334], [-0.1, 52.766666666667], [-0.1, 52.6], [-0.1, 52.433333333333], [-0.1, 52.266666666667], [-0.1, 52.1], [-0.1, 51.933333333334], [-0.1, 51.766666666667], [-0.1, 51.6], [-0.1, 51.433333333333], [-0.1, 51.266666666667], [-0.1, 51.1], [-0.1, 50.933333333334], [-0.1, 50.766666666667], [-0.1, 50.6], [-0.1, 50.433333333333], [-0.1, 50.266666666667], [-0.1, 50.1], [-0.1, 49.933333333334], [-0.1, 49.766666666667], [-0.1, 49.6], [-0.1, 49.433333333333], [-0.1, 49.266666666667], [-0.1, 49.1], [-0.1, 48.933333333334], [-0.1, 48.766666666667], [-0.1, 48.6], [-0.1, 48.433333333333], [-0.1, 48.266666666667], [-0.1, 48.1], [-0.1, 47.933333333334], [-0.1, 47.766666666667], [-0.1, 47.6], [-0.1, 47.433333333333], [-0.1, 47.266666666667], [-0.1, 47.1], [-0.1, 46.933333333334], [-0.1, 46.766666666667], [-0.1, 46.6], [-0.1, 46.433333333333], [-0.1, 46.266666666667], [-0.1, 46.1], [-0.1, 45.933333333334], [-0.1, 45.766666666667], [-0.1, 45.6], [-0.1, 45.433333333333], [-0.1, 45.266666666667], [-0.1, 45.1], [-0.1, 44.933333333334], [-0.1, 44.766666666667], [-0.1, 44.6], [-0.1, 44.433333333333], [-0.1, 44.266666666667], [-0.1, 44.1], [-0.1, 43.933333333334], [-0.1, 43.766666666667], [-0.1, 43.6], [-0.1, 43.433333333333], [-0.1, 43.266666666667], [-0.1, 43.1], [-0.1, 42.933333333334], [-0.1, 42.766666666667], [-0.1, 42.6], [-0.1, 42.433333333333], [-0.1, 42.266666666667], [-0.1, 42.1], [-0.1, 41.733333333333], [-0.1, 41.566666666667], [-0.1, 41.4], [-0.1, 41.233333333333], [-0.1, 41.066666666666], [-0.1, 40.9], [-0.1, 40.733333333333], [-0.1, 40.566666666667], [-0.1, 40.4], [-0.1, 40.233333333333], [-0.1, 40.066666666666], [-0.1, 39.9], [-0.1, 39.733333333333], [-0.1, 39.566666666667], [-0.1, 39.4], [-0.1, 39.233333333333], [-0.1, 39.066666666666], [-0.1, 38.9], [-0.1, 38.733333333333], [-0.1, 38.566666666667], [-0.1, 38.4], [-0.1, 38.233333333333], [-0.1, 38.066666666666], [-0.1, 37.9], [-0.1, 37.733333333333], [-0.1, 37.566666666667], [-0.1, 37.4], [-0.1, 37.233333333333], [-0.1, 37.066666666666], [-0.1, 36.9], [-0.1, 36.733333333333], [-0.1, 36.566666666667], [-0.1, 36.4], [-0.1, 36.233333333333], [-0.1, 36.066666666666], [-0.1, 35.9], [-0.1, 35.733333333333], [-0.1, 35.566666666667], [-0.1, 35.4], [-0.1, 35.233333333333], [-0.1, 35.066666666666], [-0.1, 34.9], [-0.1, 34.733333333333], [-0.1, 34.566666666667], [-0.1, 34.4], [-0.1, 34.233333333333], [-0.1, 34.066666666666], [-0.1, 33.9], [-0.1, 33.733333333333], [-0.1, 33.566666666667], [-0.1, 33.4], [-0.1, 33.233333333333], [-0.1, 33.066666666666], [-0.1, 32.9], [-0.1, 32.733333333333], [-0.1, 32.566666666667], [-0.1, 32.4], [-0.1, 32.233333333333], [-0.1, 32.066666666666], [-0.1, 31.9], [-0.1, 31.733333333333], [-0.1, 31.566666666667], [-0.1, 31.4], [-0.1, 31.233333333333], [-0.1, 31.066666666666], [-0.1, 30.9], [-0.1, 30.733333333333], [-0.1, 30.566666666667], [-0.1, 30.4], [-0.1, 30.233333333333], [-0.1, 30.066666666666], [-0.1, 29.9], [-0.1, 29.733333333333], [-0.1, 29.566666666667], [-0.1, 29.4], [-0.1, 29.233333333333], [-0.1, 29.066666666666], [-0.1, 28.9], [-0.1, 28.733333333333], [-0.1, 28.566666666667], [-0.1, 28.4], [-0.1, 28.233333333333], [-0.1, 28.066666666666], [-0.1, 27.9], [-0.1, 27.733333333333], [-0.1, 27.566666666667], [-0.1, 27.4], [-0.1, 27.233333333333], [-0.1, 27.066666666666], [-0.1, 26.9], [-0.1, 26.733333333333], [-0.1, 26.566666666667], [-0.1, 26.4], [-0.1, 26.233333333333], [-0.1, 26.066666666666], [-0.1, 25.9], [-0.1, 25.733333333333], [-0.1, 25.566666666667], [-0.1, 25.4], [-0.1, 25.233333333333], [-0.1, 25.066666666666], [-0.1, 24.9], [-0.1, 24.733333333333], [-0.1, 24.566666666667], [-0.1, 24.4], [-0.1, 24.233333333333], [-0.1, 24.066666666666], [-0.1, 23.9], [-0.1, 23.733333333333], [-0.1, 23.566666666667], [-0.1, 23.4], [-0.1, 23.233333333333], [-0.1, 23.066666666666], [-0.1, 22.9], [-0.1, 22.733333333333], [-0.1, 22.566666666667], [-0.1, 22.4], [-0.1, 22.233333333333], [-0.1, 22.066666666666], [-0.1, 21.9], [-0.1, 21.733333333333], [-0.1, 21.566666666667], [-0.1, 21.4], [-0.1, 21.233333333333], [-0.1, 21.066666666666], [-0.1, 20.9], [-0.1, 20.733333333333], [-0.1, 20.566666666667], [-0.1, 20.4], [-0.1, 20.233333333333], [-0.1, 20.066666666666], [-0.1, 19.9], [-0.1, 19.733333333333], [-0.1, 19.566666666667], [-0.1, 19.4], [-0.1, 19.233333333333], [-0.1, 19.066666666666], [-0.1, 18.9], [-0.1, 18.733333333333], [-0.1, 18.566666666667], [-0.1, 18.4], [-0.1, 18.233333333333], [-0.1, 18.066666666666], [-0.1, 17.9], [-0.1, 17.733333333333], [-0.1, 17.566666666667], [-0.1, 17.4], [-0.1, 17.233333333333], [-0.1, 17.066666666666], [-0.1, 16.9], [-0.1, 16.733333333333], [-0.1, 16.566666666667], [-0.1, 16.4], [-0.1, 16.233333333333], [-0.1, 16.066666666666], [-0.1, 15.9], [-0.1, 15.733333333333], [-0.1, 15.566666666667], [-0.1, 15.4], [-0.1, 15.233333333333], [-0.1, 15.066666666667], [-0.1, 14.9], [-0.1, 14.733333333333], [-0.1, 14.566666666667], [-0.1, 14.4], [-0.1, 14.233333333333], [-0.1, 14.066666666667], [-0.1, 13.9], [-0.1, 13.733333333333], [-0.1, 13.566666666667], [-0.1, 13.4], [-0.1, 13.233333333333], [-0.1, 13.066666666667], [-0.1, 12.9], [-0.1, 12.733333333333], [-0.1, 12.566666666667], [-0.1, 12.4], [-0.1, 12.233333333333], [-0.1, 12.066666666667], [-0.1, 11.9], [-0.1, 11.733333333333], [-0.1, 11.566666666667], [-0.1, 11.4], [-0.1, 11.233333333333], [-0.1, 11.066666666667], [-0.1, 10.9], [-0.1, 10.733333333333], [-0.1, 10.566666666667], [-0.1, 10.4], [-0.1, 10.233333333333], [-0.1, 10.066666666667], [-0.1, 9.9], [-0.1, 9.7333333333334], [-0.1, 9.5666666666667], [-0.1, 9.4], [-0.1, 9.2333333333333], [-0.1, 9.0666666666667], [-0.1, 8.9], [-0.1, 8.7333333333334], [-0.1, 8.5666666666667], [-0.1, 8.4], [-0.1, 8.2333333333333], [-0.1, 8.0666666666667], [-0.1, 7.9], [-0.1, 7.7333333333334], [-0.1, 7.5666666666667], [-0.1, 7.4], [-0.1, 7.2333333333333], [-0.1, 7.0666666666667], [-0.1, 6.9], [-0.1, 6.7333333333334], [-0.1, 6.5666666666667], [-0.1, 6.4], [-0.1, 6.2333333333333], [-0.1, 6.0666666666667], [-0.1, 5.9], [-0.1, 5.7333333333334], [-0.1, 5.5666666666667], [-0.1, 5.4], [-0.1, 5.2333333333333], [-0.1, 5.0666666666667], [-0.1, 4.9], [-0.1, 4.7333333333334], [-0.1, 4.5666666666667], [-0.1, 4.4], [-0.1, 4.2333333333333], [-0.1, 4.0666666666667], [-0.1, 3.9], [-0.1, 3.7333333333333], [-0.1, 3.5666666666667], [-0.1, 3.4], [-0.1, 3.2333333333333], [-0.1, 3.0666666666666], [-0.1, 2.9], [-0.1, 2.7333333333333], [-0.1, 2.5666666666667], [-0.1, 2.4], [-0.1, 2.2333333333333], [-0.1, 2.0666666666666], [-0.1, 1.9], [-0.1, 1.7333333333333], [-0.1, 1.5666666666667], [-0.1, 1.4], [-0.1, 1.2333333333333], [-0.1, 1.0666666666666], [-0.1, 0.9], [-0.1, 0.73333333333334], [-0.1, 0.56666666666667], [-0.1, 0.4], [-0.1, 0.23333333333333], [-0.1, 0.066666666666665], [-0.1, -0.1],
                ],
            ],
        ];
    }
}
